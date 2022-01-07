<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\ReturnProduct;
use App\Models\SoldProduct;
use App\Models\ProductStock;
use App\Models\ProductRequest;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function index(){

        //All
        $total_products = Product::count();
        $total_users = User::count();
        $total_requests = ProductRequest::count();
        $total_stocks_in = ProductStock::count();
        $total_return_products = ReturnProduct::count();
        $total_sold_products = SoldProduct::count();

        //Today
        $TOD_total_products = Product::whereDate('created_at', Carbon::today())->get()->count();
        $TOD_total_users = User::whereDate('created_at', Carbon::today())->get()->count();
        $TOD_total_requests = ProductRequest::whereDate('date', Carbon::today())->get()->count();
        $TOD_total_stocks_in = ProductStock::whereDate('date', Carbon::today())->get()->count();
        $TOD_total_return_products = ReturnProduct::whereDate('date', Carbon::today())->get()->count();
        $TOD_total_sold_products = SoldProduct::whereDate('date', Carbon::today())->get()->count();

        //This month
        $date = Carbon::today()->subDays(30); 
        $MO_total_products = Product::where('created_at','>=',$date)->get()->count();
        $MO_total_users = User::where('created_at','>=',$date)->get()->count();
        $MO_total_requests = ProductRequest::where('date','>=',$date)->get()->count();
        $MO_total_stocks_in = ProductStock::where('date','>=',$date)->get()->count();
        $MO_total_return_products = ReturnProduct::where('date','>=',$date)->get()->count();
        $MO_total_sold_products = SoldProduct::where('date','>=',$date)->get()->count();

        //This week
        $date = Carbon::today()->subDays(7); 
        $WK_total_products = Product::where('created_at','>=',$date)->get()->count();
        $WK_total_users = User::where('created_at','>=',$date)->get()->count();
        $WK_total_requests = ProductRequest::where('date','>=',$date)->get()->count();
        $WK_total_stocks_in = ProductStock::where('date','>=',$date)->get()->count();
        $WK_total_return_products = ReturnProduct::where('date','>=',$date)->get()->count();
        $WK_total_sold_products = SoldProduct::where('date','>=',$date)->get()->count();

        //Users
        $ADM_users = User::where('utype', 'ADM')->count();
        $MCV_users = User::where('utype', 'MCV')->count();
        $CHV_users = User::where('utype', 'CHV')->count();

        //Stocks in
        $ADM_stocks_in = ProductStock::where('status', ProductStock::STOCK_IN)->where('utype', 'ADM')->get()->count();
        $MCV_stocks_in = ProductStock::where('status', ProductStock::STOCK_IN)->where('utype', 'MCV')->get()->count();
        $CHV_stocks_in = ProductStock::where('status', ProductStock::STOCK_IN)->where('utype', 'CHV')->get()->count();

        //Dispatched
        $ADM_sold_products = SoldProduct::where('utype', 'ADM')->get()->count();
        $MCV_sold_products = SoldProduct::where('utype', 'MCV')->get()->count();
        $CHV_sold_products = SoldProduct::where('utype', 'CHV')->get()->count();

        //Return
        $ADM_return_products = ReturnProduct::where('utype', 'ADM')->get()->count();
        $MCV_return_products = ReturnProduct::where('utype', 'MCV')->get()->count();
        $CHV_return_products = ReturnProduct::where('utype', 'CHV')->get()->count();

        return view('chart.index', compact('total_products', 'total_users', 'total_return_products', 'total_sold_products', 'total_requests', 'total_stocks_in',
        'TOD_total_products', 'TOD_total_users', 'TOD_total_return_products', 'TOD_total_sold_products', 'TOD_total_requests', 'TOD_total_stocks_in', 
        'MO_total_products', 'MO_total_users', 'MO_total_return_products', 'MO_total_sold_products', 'MO_total_requests', 'MO_total_stocks_in',
        'WK_total_products', 'WK_total_users', 'WK_total_return_products', 'WK_total_sold_products', 'WK_total_requests', 'WK_total_stocks_in',
        'ADM_users', 'MCV_users', 'CHV_users', 'ADM_stocks_in', 'MCV_stocks_in', 'CHV_stocks_in', 
        'ADM_sold_products', 'MCV_sold_products', 'CHV_sold_products', 'ADM_return_products', 'MCV_return_products', 'CHV_return_products'));

    }
}
