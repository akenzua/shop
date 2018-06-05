<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Http\Requests\SubCategoryRequest;
 
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = SubCategory::all();
        return view('admin.subcat.index', [
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
        return view('admin.subcat.create', [
            'category' => $category
             ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        SubCategory::create([
            'category_id' => $request->input('category'),
            'sub_category' => $request->input('subcat')
        ]);
        return redirect()->route('subcat.index')->with('message', 'Subcategory has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function show($subcat)
    {
        $subcategory = SubCategory::where('category_id', $subcat)->get();
        


        return json_encode($subcategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcat)
    {
        // $subcat = Subcategory::findOrFail($subcat);
        // return $subcat;
        return view('admin.subcat.edit', [ 'subcat'=> $subcat
            
             ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcat)
    {
        
        $subcat->sub_category = $request->subcat;
        $subcat->save();
        return redirect()->route('subcat.index')->with('message', 'Subcategory has been edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcat)
    {
        $subcat->delete();
        return redirect()->route('subcat.index')->with('message', 'Subcategory has been deleted successfully');
    }
}
