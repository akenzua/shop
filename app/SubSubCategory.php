<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    protected $fillable = [
        'sub_sub_category',
        'sub_category_id',
        'category_id'
    ];
    public function subcategory(){
        return $this->belongsTo ('App\SubCategory');
    }
}

