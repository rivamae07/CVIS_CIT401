<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SoldProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Models\ProductSizeStock;
Use Carbon\Carbon;
class MobileSoldProductsController extends Controller
{
    public function soldProduct(){
        return view ('mobilesold_products.sold');
    }

    public function soldProductSubmit(Request $request){
         //Validate data
         $validate = Validator::make($request->all(), [
            'product_id' => 'required|numeric',
            'date' => 'required|string',
            'items' => 'required'
        ]);

        //Error Response
        if($validate->fails()){
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
                if($psq->location == 'MCV'){
                    $new_item = new SoldProduct();
                    $new_item->product_id = $request->product_id;
                    $new_item->date = $request->date;
                    $new_item->size_id = $item['size_id'];
                    $new_item->quantity = $item['quantity'];
                    $new_item->utype = 'MCV';
                    $new_item->save();

                    //Stock in - Quantity Change
                    if($psq->location == 'MCV'){
                        $psq->quantity = $psq->quantity - $item['quantity'];

                        if($psq->quantity >= 0){
                            $psq->save();
                            flash('Dispatched Product Updated Successfully')->success();
                        }else{
                            flash('Insufficient Amount of Products Available in Storage')->warning();
                        }
                    }else{
                        flash('You cannot insert a dispatched product in the San Pedro City Hall Center')->warning();
                    }
                }else{
                    flash('You cannot insert a dispatched product in the San Pedro City Hall Center')->warning();
                }
            }
        }

        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
    }

    public function history(){
        $sold_products = SoldProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('mobilesold_products.history', compact('sold_products'));
    }

    public function today(){
        $sold_products = SoldProduct::with(['product', 'size'])->whereDate('date', Carbon::today())->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('mobilesold_products.soldPrint', compact('sold_products'));
    }

    public function month(){
        $date = Carbon::today()->subDays(30); 
        $sold_products = SoldProduct::with(['product', 'size'])->where('date','>=',$date)->where('utype', 'MCV')->orderBy('created_at', 'DESC')->get();
        return view('mobilesold_products.soldPrint', compact('sold_products'));
    }

    public function week(){
        $date = Carbon::today()->subDays(7); 
        $sold_products = SoldProduct::with(['product', 'size'])->where('date','>=',$date)->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('mobilesold_products.soldPrint', compact('sold_products'));
    }

    public function soldPrint(){
        $sold_products = SoldProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('mobilesold_products.soldPrint', compact('sold_products'));
    }
}
