<?php

namespace App\Http\Controllers;

use App\Models\ReturnProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ProductSizeStock;
use App\Models\ProductStock;
use Carbon\Carbon;

class CityHallReturnProductsController extends Controller
{
    public function returnProduct()
    {
        return view('cityhallreturn_products.return');
    }

    public function returnProductSubmit(Request $request)
    {
        //Validate data
        $validate = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'date' => 'required|string',
            'items' => 'required'
        ]);

        //Error Response
        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //Store Sold Product
        foreach ($request->items as $item){
            if($item['quantity'] && $item['quantity'] > 0){
                
                //Product Stock Size Update
                $psq = ProductSizeStock::where('product_id', $request->product_id)
                ->where('size_id', $item['size_id'])
                ->first();
                
                //Stock History Report
                if($psq->location == 'CHV'){
                    $new_item = new ReturnProduct();
                    $new_item->product_id = $request->product_id;
                    $new_item->date = $request->date;
                    $new_item->size_id = $item['size_id'];
                    $new_item->quantity = $item['quantity'];
                    $new_item->utype = 'CHV';
                    $new_item->save();

                    //Stock in - Quantity Change
                    if($psq->location == 'CHV'){
                        $psq->quantity = $psq->quantity + $item['quantity'];

                        if($psq->quantity >= 0){
                            $psq->save();
                            flash('Return Product Updated Successfully')->success();
                        }else{
                            flash('Insufficient Amount of Products Available in Storage')->warning();
                        }
                    }else{
                        flash('You cannot insert a return product in the Mobile Vaccine Center')->warning();
                    }
                }else{
                    flash('You cannot insert a return product in the Mobile Vaccine Center')->warning();
                }
            }
        }

        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
    }

    public function history()
    {
        $return_products = ReturnProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('cityhallreturn_products.history', compact('return_products'));
    }
    public function today()
    {
        $return_products = ReturnProduct::with(['product', 'size'])->whereDate('date', Carbon::today())->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('cityhallreturn_products.returnPrint', compact('return_products'));
    }

    public function month()
    {
        $date = Carbon::today()->subDays(30);
        $return_products = ReturnProduct::with(['product', 'size'])->where('date', '>=', $date)->where('utype', 'CHV')->orderBy('created_at', 'DESC')->get();
        return view('cityhallreturn_products.returnPrint', compact('return_products'));
    }

    public function week()
    {
        $date = Carbon::today()->subDays(7);
        $return_products = ReturnProduct::with(['product', 'size'])->where('date', '>=', $date)->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('cityhallreturn_products.returnPrint', compact('return_products'));
    }

    public function returnPrint()
    {
        $return_products = ReturnProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('cityhallreturn_products.returnPrint', compact('return_products'));
    }
}