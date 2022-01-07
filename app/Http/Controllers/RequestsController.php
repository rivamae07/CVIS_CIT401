<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ProductStock;
use App\Models\ProductRequest;
use App\Models\ProductSizeStock;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class RequestsController extends Controller
{
       
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request=ProductRequest::findOrFail($id);
        $request->delete();
        flash('Request Deleted Successfully')->success();
        return back();
    }

    public function request(){
        return view ('requests.request');
    }

    public function store(Request $request)
    {
        ProductRequest::query()
        ->each(function ($oldRecord) {
            
            $newPost = $oldRecord->replicate();
            $newPost ->setTable('product_stocks');
            $newPost ->save();

            // $oldPost->delete();

            //Product Stock Size Update
            $psq = ProductSizeStock::where('product_id', $newPost->product_id)
            ->where('size_id', $newPost->size_id)
            ->first();
        
            $psq->quantity = $psq->quantity + $newPost->quantity;
            $psq->save();

        });

        ProductRequest::whereNotNull('id')->delete();
        flash('Request Fulfilled Successfully')->success();
        return back();
    }

    public function history(){
        $requests = ProductRequest::with(['product', 'size'])->orderBy('created_at', 'DESC')->get();
        return view('requests.history', compact('requests'));
    }

}
