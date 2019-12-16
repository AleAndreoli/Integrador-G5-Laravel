<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    // Modelo de la clase proveedor

    protected $fillable = [
        'name', 'billing_method'
    ];
}
