<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Image;
use App\Product;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        $product = Product::all();
        return view('admin.images.index', [
            'images' => $images,
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
        $product = Product::all();
        return view('admin.images.create', [
            'product' => $product
             ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Image $image)
    {
        // 1st image
        if($request->image_1 == null){
             
        }else{

            $img = $request->file('image_1');
            $new_name = 'product_'. $request->product . '_copy_01' . '.' . $img->getClientOriginalExtension();
            $img->move(public_path("img"), $new_name);
            
            $image = new image;
            $image->image = $new_name;
            $image->product_id = $request->product;
            $image->save();
             
        }
        // 2nd image
        if($request->image_2 == null){
            
       }else{

           $img = $request->file('image_2');
           $new_name = 'product_'. $request->product . '_copy_02' . '.' . $img->getClientOriginalExtension();
           $img->move(public_path("img"), $new_name);
           $image = new image;
           $image->image = $new_name;
           $image->product_id = $request->product;
           $image->save();
            
       }
        // 3rd image
        if($request->image_3 == null){
            
       }else{

           $img = $request->file('image_3');
           $new_name = 'product_'. $request->product . '_copy_03' . '.' . $img->getClientOriginalExtension();
           $img->move(public_path("img"), $new_name);
           $image = new image;
           $image->image = $new_name;
           $image->product_id = $request->product;
           $image->save();
            
       }
        // 4th image
        if($request->image_4 == null){
            
       }else{

           $img = $request->file('image_4');
           $new_name = 'product_'. $request->product . '_copy_04' . '.' . $img->getClientOriginalExtension();
           $img->move(public_path("img"), $new_name);
           $image = new image;
           $image->image = $new_name;
           $image->product_id = $request->product;
           $image->save();
            
       }
        // 5th image
        if($request->image_5 == null){
            
       }else{

           $img = $request->file('image_5');
           $new_name = 'product_'. $request->product . '_copy_05' . '.' . $img->getClientOriginalExtension();
           $img->move(public_path("img"), $new_name);
           $image = new image;
           $image->image = $new_name;
           $image->product_id = $request->product;
           $image->save();
            
       }
        // 6th image
        if($request->image_6 == null){
            
       }else{

           $img = $request->file('image_6');
           $new_name = 'product_'. $request->product . '_copy_06' . '.' . $img->getClientOriginalExtension();
           $img->move(public_path("img"), $new_name);
           $image = new image;
           $image->image = $new_name;
           $image->product_id = $request->product;
           $image->save();
            
       }
       return redirect()->route('images.index')->with('message', 'Image(s) has been added successfully');
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
    public function edit(Image $image)
    {
        return view('admin.images.replace', [ 'image'=> $image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        // return $image;
        $id = $image->product_id;
        $img = $request->file('image');
        $new_name = 'product_'. $id . '_replaced' . '.' . $img->getClientOriginalExtension();
        $img->move(public_path("img"), $new_name);
        
        // $image = new image;
        $image->image = $new_name;
        $image->product_id = $id;
        $image->save();
        return redirect()->route('images.index')->with('message', 'Image(s) has been replaced successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('images.index')->with('message', 'Image has been deleted successfully');
    }
}
