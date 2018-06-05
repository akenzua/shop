<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'sub_category',
        'category_id'
        
    ];
    public function product()
    {
        return $this->hasOne('App\Product');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function subsubcategory()
    {
        return $this->hasMany('App\SubSubCategory');
    }
}
