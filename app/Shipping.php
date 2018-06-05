<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [
        'country',
        'state',
        'city',
        'landmark',
        'address',
        'first_name',
        'last_name',
        'email',
        'phone',
        'method',
        'order_id'
    ];

    public function order(){
        return $this->belongsTo ('App\Order');
    }
}
