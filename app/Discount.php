<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    // Modelo de la tabla Discounts

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_discounts', 'discount_id', 'product_id');
    }
}
