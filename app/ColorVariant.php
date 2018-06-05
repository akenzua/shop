<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorVariant extends Model
{
    protected $fillable = [
        'color_id',
        'color_code'
        
    ];
    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
