<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SizeOption extends Model
{
    protected $fillable = [
        'size_id',
        'product_id',
        'stock'
        
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function size()
    {
        return $this->belongsTo('App\Size');
    }
}
