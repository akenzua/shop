<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\SubSubCategory;
use App\Http\Requests\SubSubRequest;

class SubSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategory::all();
        return view('admin.subsub.index', [
            'subcategory' => $subcategory
             ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.subsub.create', [
            'category' => $category
             ]);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubSubRequest $request)
    {
        // return $request;
        SubSubCategory::create([
            'category_id' => $request->input('category'),
            'sub_category_id' => $request->input('subcat'),
            'sub_sub_category' => $request->input('subsub'),
        ]);
        return redirect()->route('subsub.index')->with('message', 'Sub Sub Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($subsub)
    {
        $subcategory = SubSubCategory::where('sub_category_id', $subsub)->get();
        


        return json_encode($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubcategory $subsub)
    {
        return view('admin.subsub.edit', [ 'subsub'=> $subsub
        
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubSubcategory $subsub)
    {
        // return $request;
        $subsub->sub_sub_category = $request->subcat;
        $subsub->save();
        return redirect()->route('subsub.index')->with('message', 'Sub Sub category has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSubCategory $subsub)
    {
        $subsub->delete();
        return redirect()->route('subsub.index')->with('message', 'Sub Sub Category has been deleted successfully');
    }
}
