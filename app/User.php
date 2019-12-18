<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'last_name', 'email', 'password', 'TyCAcepted', 'esAdmin', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAddresses()
    {
        return Adress::where('user_id', $this->id)->get();
    }

    public function addresses()
    {
        return $this->hasMany('App\Address', 'user_id');
    }

    public function telephones()
    {
        return $this->hasMany('App\Telephone', 'user_id');
    }

    public function shopingCarts()
    {
        return $this->hasMany('App\ShoppingCart', 'user_id');
    }

    public function favorites()
    {
        return $this->belongsToMany('App\Product', 'favorite_users', 'user_id', 'product_id');
    }
}
