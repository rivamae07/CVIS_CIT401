<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('created_at', 'DESC')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this->validate($request,[
            'name' => 'required|min:2|max:50|unique:categories'
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->save();

        flash('Category created successfully')->success();
        return back();

        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
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
         //Validation
         $this->validate($request,[
            'name' => 'required|min:2|max:50|unique:categories,name,' . $id
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->save();

        flash('Category updated successfully')->success();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        flash('Category deleted successfully')->success();
        return redirect()->route('categories.index');
    }

    // public function delete($id)
    // {
    //     $category=Category::find($id);
    //     $category->delete();
    //     flash('Category deleted successfully')->success();
    //     return view('categories.index');
    // }

    //HANDLE AJAX REQUEST
    public function getCategoriesJson(){
        $categories = \App\Models\Category::all();

        return response()->json([
            'success' => true,
            'data' => $categories
        ], \Illuminate\Http\Response::HTTP_OK); 
    }
}
