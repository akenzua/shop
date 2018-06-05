<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'price',
        'brand_id',
        'discount_id',
        'category_id',
        'sub_category_id',
        'color_id',
        'image_path',
        'slug',
        'sub_sub_category_id',
        'product_code',
        'overview'
    ];

    public function sub_category()
    {
        return $this->belongsTo('App\SubCategory');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function image()
    {
        return $this->hasMany('App\Image');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function size_options(){
        return $this->hasMany('App\SizeOption');
    }

    public function color(){
        return $this->belongsTo('App\Color');
    }

    public function discount(){
        return $this->belongsTo('App\Discount');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function likes(){
        return $this->belongsTo('App\Like');
      }
}
