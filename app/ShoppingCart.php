<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    // Modelo de la clase Carrito

    //protected $table = 'shopping_carts';

    public function usuario()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function products()
    {
        $this->belongsToMany('App\Product', 'product_carts', 'shopping_cart_id', 'product_id');
    }
}
