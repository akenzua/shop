<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Color;
use App\Discount;


use App\Http\Requests\ManageRequest;
class ManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', [
            'product' => $product
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discount = Discount::all();
        $color = Color::all();
        $brand = Brand::all();
        $category = Category::all();
        $product = Product::all();
        return view('admin.product.create', [
            'category' => $category,
            'brand' => $brand,
            'discount' => $discount,
            'color'=> $color
             ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManageRequest $request)
    {
        //  return $request;
        $image = $request->file('image_path');
        $new_name = $request->input('slug') . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("img"), $new_name);
        // return $new_name;
        Product::create([
            'product_name' => $request->input('product_name'),
            'category_id' => $request->input('category'),
            'description' => $request->input('description'),
            'overview' => $request->input('overview'),
            'slug' => $request->input('slug'),
            'price' => $request->input('price'),
            'product_code' => $request->input('code'),
            'sub_category_id' => $request->input('subcat'),
            'sub_sub_category_id' => $request->input('subsub'),
            'brand_id' => $request->input('brand'),
            'discount_id' => $request->input('discount'),
            'color_id' => $request->input('color'),
            'image_path' => $new_name,

        ]);
        return redirect()->route('product.index')->with('message', 'Product has been added successfully');
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
    public function edit(Product $product)
    {
        $discount = Discount::all();
        $color = Color::all();
        $brand = Brand::all();
        $category = Category::all();
       
        return view('admin.product.edit', [ 
            'product'=> $product,
            'category' => $category,
            'brand' => $brand,
            'discount' => $discount,
            'color'=> $color
        
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         
       
        $product->overview = $request->overview;
        $product->product_name = $request->product_name;
        $product->category_id = $request->category;
        $product->description = $request->description;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->product_code = $request->code;

        if($request->subcat == null){
            $product->sub_category_id = $product->sub_category_id; 
        }else{
           $product->sub_category_id = $request->subcat; 
        }
        
        if($request->subsub == null){
            $product->sub_sub_category_id = $product->sub_sub_category_id; 
        }else{
            $product->sub_sub_category_id = $request->subsub; 
        }
       
        if($request->image_path == null){
            $product->image_path = $product->image_path; 
        }else{

            $image = $request->file('image_path');
            $new_name = $request->input('slug') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("img"), $new_name);
            $product->image_path = $new_name; 
        }

        $product->brand_id = $request->brand;
        $product->discount_id = $request->discount;
        $product->color_id = $request->color;
        // $product->image_path = $new_name;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Product has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Product has been deleted successfully');
    }
}
