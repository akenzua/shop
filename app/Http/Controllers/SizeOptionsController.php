<?php

namespace App\Http\Controllers;
use App\Product;
use App\Size;
use App\SizeOption;
use Illuminate\Http\Request;
use App\Http\Requests\OptionsRequest;

class SizeOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $product = Product::all();
        return view('admin.options.index', [
            'product' => $product,
            
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $size = Size::all();
        $product = Product::all();
        return view('admin.options.create', [
            'product' => $product,
            'size' => $size
             ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionsRequest $request)
    {
        SizeOption::create([
            'stock'  => $request->input('stock'),
            'product_id' => $request->input('product'),
            'size_id' => $request->input('size'),
        ]);
        return redirect()->route('options.index')->with('message', 'Options have been added successfully');
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
    public function edit(SizeOption $option)
    {
        $size = Size::all();
        $product = Product::all();
        return view('admin.options.edit', [ 'option'=> $option, 'product'=>$product, 'size' => $size
        
         ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SizeOption $option)
    {
        
        $option->delete();
        return redirect()->route('options.index')->with('message', 'Options have been deleted successfully');
    }
}
