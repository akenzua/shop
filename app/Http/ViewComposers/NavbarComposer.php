<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\SubCategory;
use App\SubSubCategory;
use App\Category;

class NavbarComposer{

public function __construct(){

}



public function compose(View $view){

    
    $women = SubCategory::where('category_id', 2)->get();
    $men = SubCategory::where('category_id', 1)->get();
    $view->with('men', $men)->with('women', $women);
    }
}