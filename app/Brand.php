<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'brand',
        'brand_description'
    ];

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
