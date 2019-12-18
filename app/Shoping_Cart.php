<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoping_Cart extends Model
{
    // Modelo de la clase Carrito

    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function products()
    {
        $this->belongsToMany('App\Product', 'product_carts', 'shoping_cart_id', 'product_id');
    }
}
