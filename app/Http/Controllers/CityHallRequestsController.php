<?php

namespace App\Http\Controllers;

use App\Models\ProductRequest;
use App\Models\ProductSizeRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ProductStock;
use App\Models\ProductSizeStock;

class CityHallRequestsController extends Controller
{
    public function request(){
        return view ('cityhallrequests.request');
    }

    public function stockSubmit(Request $request){
         //Validate data
         $validate = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'date' => 'required|string',
            'stock_type' => 'required|string',
            'items' => 'required'
        ]);

        //Error Response
        if($validate->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //Store Product Stock
        foreach ($request->items as $item){
            if($item['quantity'] && $item['quantity'] > 0){

                //Product Stock Size Update
                $psq = ProductSizeStock::where('product_id', $request->product_id)
                ->where('size_id', $item['size_id'])
                ->first();

                if($psq->location == 'CHV'){
                        $new_item = new ProductRequest();
                        $new_item->product_id = $request->product_id;
                        $new_item->date = $request->date;
                        $new_item->status = 'in';
                        $new_item->size_id = $item['size_id'];
                        $new_item->quantity = $item['quantity'];
                        $new_item->utype = 'CHV';
                        $new_item->save();
                        flash('Request updated successfully')->success();
                }else{
                    flash('You cannot insert a request in the Mobile Vaccine Center')->warning();
                }
            }else{
                flash('Insufficient Amount of Products Available in Storage')->warning();
            }
        }

        return response()->json([
            'success' => true
        ], Response::HTTP_OK);
    }

    public function history(){
        $requests = ProductRequest::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('cityhallrequests.history', compact('requests'));
    }
}
