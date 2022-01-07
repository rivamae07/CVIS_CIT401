<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Models\Product;
use App\Models\ProductSizeStock;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ADMCityHallProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'brand'])->orderBy('created_at', 'DESC')->get();
        return view('ADMcityhallproducts.index', compact('products'));
    }

    public function report(){
        $products = ProductSizeStock::with(['product', 'size', 'category', 'brand'])->
        where('location', 'CHV')->
        orderBy('created_at', 'DESC')->get();
        return view('ADMcityhallproducts.report', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::with(['category', 'brand', 'product_stocks.size'])
            ->where('id', $id)
                ->first();

        return view('ADMcityhallproducts.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    //HANDLE AJAX REQUEST
    public function getProductsJson(){
        $products = Product::with(['product_stocks.size'])->get();

        return response()->json([
            'success' => true,
            'data' => $products
        ], \Illuminate\Http\Response::HTTP_OK); 
    }
}
