<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SoldProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use App\Models\ProductSizeStock;
use Carbon\Carbon;
class ADMCityHallSoldProductsController extends Controller
{
    public function soldProduct(){
        return view ('ADMcityhallsold_products.sold');
    }

    public function history(){
        $sold_products = SoldProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('ADMcityhallsold_products.history', compact('sold_products'));
    }

    public function today(){
        $sold_products = SoldProduct::with(['product', 'size'])->whereDate('date', Carbon::today())->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('ADMcityhallsold_products.soldPrint', compact('sold_products'));
    }

    public function month(){
        $date = Carbon::today()->subDays(30); 
        $sold_products = SoldProduct::with(['product', 'size'])->where('date','>=',$date)->where('utype', 'CHV')->orderBy('created_at', 'DESC')->get();
        return view('ADMcityhallsold_products.soldPrint', compact('sold_products'));
    }

    public function week(){
        $date = Carbon::today()->subDays(7); 
        $sold_products = SoldProduct::with(['product', 'size'])->where('date','>=',$date)->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('ADMcityhallsold_products.soldPrint', compact('sold_products'));
    }

    public function soldPrint(){
        $sold_products = SoldProduct::with(['product', 'size'])->orderBy('created_at', 'DESC')->where('utype', 'CHV')->get();
        return view('ADMcityhallsold_products.soldPrint', compact('sold_products'));
    }
}
