<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    public function isAdmin()    {        
        return $this->type === self::ADMIN_TYPE;    
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function views(){
        return $this->hasMany('App\View');
    }

    public function likes(){
        return $this->hasMany('App\Like');
      }
}
