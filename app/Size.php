<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [
        'size'
        
    ];

    public function size_options()
    {
        return $this->hasOne('App\SizeOption');
    }
}
