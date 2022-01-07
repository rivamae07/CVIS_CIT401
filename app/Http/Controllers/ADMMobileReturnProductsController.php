<?php

namespace App\Http\Controllers;

use App\Models\ReturnProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\ProductSizeStock;
use App\Models\ProductStock;
use Carbon\Carbon;

class ADMMobileReturnProductsController extends Controller
{
    public function returnProduct(){
        return view ('ADMmobilereturn_products.return');
    }

    public function history(){
        $return_products = ReturnProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('ADMmobilereturn_products.history', compact('return_products'));
    }

    public function today(){
        $return_products = ReturnProduct::with(['product', 'size'])->whereDate('date', Carbon::today())->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('ADMmobilereturn_products.returnPrint', compact('return_products'));
    }

    public function month(){
        $date = Carbon::today()->subDays(30); 
        $return_products = ReturnProduct::with(['product', 'size'])->where('date','>=',$date)->where('utype', 'MCV')->orderBy('created_at', 'DESC')->get();
        return view('ADMmobilereturn_products.returnPrint', compact('return_products'));
    }

    public function week(){
        $date = Carbon::today()->subDays(7); 
        $return_products = ReturnProduct::with(['product', 'size'])->where('date','>=',$date)->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('ADMmobilereturn_products.returnPrint', compact('return_products'));
    }

    public function returnPrint(){
        $return_products = ReturnProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'MCV')->get();
        return view('ADMmobilereturn_products.returnPrint', compact('return_products'));
    }
}
