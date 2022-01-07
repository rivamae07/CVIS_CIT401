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

class DashboardController extends Controller
{
    public function index(){
        //Recent Products
        $recent_products = Product::latest()->limit(5)->get();

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

        return view('dashboard', compact('total_products', 'total_users', 'total_return_products', 'total_sold_products', 'total_requests', 'total_stocks_in',
        'TOD_total_products', 'TOD_total_users', 'TOD_total_return_products', 'TOD_total_sold_products', 'TOD_total_requests', 'TOD_total_stocks_in', 
        'MO_total_products', 'MO_total_users', 'MO_total_return_products', 'MO_total_sold_products', 'MO_total_requests', 'MO_total_stocks_in',
        'WK_total_products', 'WK_total_users', 'WK_total_return_products', 'WK_total_sold_products', 'WK_total_requests', 'WK_total_stocks_in',
        'recent_products'));
    }
}
