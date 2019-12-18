<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    // Modelo de la clase proveedor

    protected $fillable = [
        'name', 'billing_method'
    ];

    public function products()
    {
        return $this->hasMany('App\Product', 'provider_id');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address', 'provider_id');
    }

    public function telephones()
    {
        return $this->hasMany('App\Telephone', 'provider_id');
    }
}
