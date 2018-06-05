<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = [
        'discount'
        
    ];

    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
