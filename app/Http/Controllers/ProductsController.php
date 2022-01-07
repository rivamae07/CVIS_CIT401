<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Models\Product;
use App\Models\ProductSizeStock;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category', 'brand'])->orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('products'));
    }

    public function notifications()
    {
        $products = ProductSizeStock::with(['product', 'size'])->where('quantity','<=',10)->get();
        return view('products.notifications', compact('products'));
    }

    public function notificationsExpiry()
    {
        $now = Carbon::now()->format('Y-m-d');

        $products = Product::with(['category', 'brand'])->where('expiration_date', '<=', $now)->orderBy('created_at', 'DESC')->get();
        return view('products.expired-products', compact('products'));
    }


    public function report(){
        $products = ProductSizeStock::with(['product', 'size', 'category', 'brand'])->orderBy('created_at', 'DESC')->get();
        return view('products.report', compact('products'));
    }

    public function today(){
        $products = ProductSizeStock::with(['product', 'size', 'category', 'brand'])->whereDate('created_at', Carbon::today())->orderBy('created_at', 'DESC')->get();
        return view('products.report', compact('products'));
    }

    public function month(){
        $date = Carbon::today()->subDays(30);
        $products = ProductSizeStock::with(['product', 'size', 'category', 'brand'])->where('created_at','>=',$date)->orderBy('created_at', 'DESC')->get();
        return view('products.report', compact('products'));
    }

    public function week(){
        $date = Carbon::today()->subDays(7);
        $products = ProductSizeStock::with(['product', 'size', 'category', 'brand'])->where('created_at','>=',$date)->orderBy('created_at', 'DESC')->get();
        return view('products.report', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data
        $validate = Validator::make($request->all(),[
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
            'sku' => 'required|string|max:100|unique:products',
            'name' => 'required|string|min:2|max:200',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
            'cost_price' => 'required|numeric',
            'expiration_date' => 'required|string',
            'year' => 'required',
            'description' => 'required|max:200',
            'status' => 'required|numeric'
        ]);

        //Error Response
        if($validate->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //Store product
        $product = new Product();
        $product->user_id = Auth::id();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->cost_price = $request->cost_price;
        $product->expiration_date = $request->expiration_date;
        $product->year = $request->year;
        $product->description = $request->description;
        $product->status = '1';

        //Upload Image
        if($request->hasFile('image')){
            $image = $request->image;
            $name = Str::random(60) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/product_images', $name);
            $product->image = $name;
        }

        //Save product
        $product->save();
        // return $request->items;

        //Store product size stock
        if($request->items){
            foreach(json_decode($request->items) as $item){
                $size_stock = new ProductSizeStock();
                $size_stock->product_id = $product->id;
                $size_stock->size_id = $item->size_id;
                $size_stock->location = $item->location;
                $size_stock->quantity = $item->quantity;
                $size_stock->save();
            }
        }

        flash('Product Created Successfully')->success();

        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
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

        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->with(['product_stocks'])->first();
        return view('products.edit', compact('product'));
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
                //Validate data
                $validate = Validator::make($request->all(),[
                    'category_id' => 'required|numeric',
                    'brand_id' => 'required|numeric',
                    'sku' => 'required|string|max:100|unique:products,sku,'.$id,
                    'name' => 'required|string|min:2|max:200',
                    'image' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
                    'cost_price' => 'required|numeric',
                    'expiration_date' => 'required|string',
                    'year' => 'required',
                    'description' => 'required|max:200',
                    'status' => 'required|numeric'
                ]);

                //Error Response
                if($validate->fails()){
                    return response()->json([
                        'success' => false,
                        'errors' => $validate->errors()
                    ], Response::HTTP_UNPROCESSABLE_ENTITY);
                }

                //Update product
                $product = Product::findOrFail($id);

                $product->user_id = Auth::id();
                $product->category_id = $request->category_id;
                $product->brand_id = $request->brand_id;
                $product->sku = $request->sku;
                $product->name = $request->name;
                $product->cost_price = $request->cost_price;
                $product->expiration_date = $request->expiration_date;
                $product->year = $request->year;
                $product->description = $request->description;
                $product->status = $request->status;

                //Upload Image
                if($request->hasFile('image')){
                    $image = $request->image;
                    $name = Str::random(60) . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/product_images', $name);
                    $product->image = $name;
                }

                //Save product
                $product->save();

                //Delete old stock
                ProductSizeStock::where('product_id', $id)->delete();

                //Store product size stock
                if($request->items){
                    foreach(json_decode($request->items) as $item){
                        $size_stock = new ProductSizeStock();
                        $size_stock->product_id = $product->id;
                        $size_stock->size_id = $item->size_id;
                        $size_stock->location = $item->location;
                        $size_stock->quantity = $item->quantity;
                        $size_stock->save();
                    }
                }

                flash('Product Updated Successfully')->success();

                return response()->json([
                    'success' => true,
                ], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        flash('Product Deleted Successfully')->success();
        return back();
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
