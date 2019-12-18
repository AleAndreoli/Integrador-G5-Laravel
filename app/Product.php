<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'price', 'name', 'description', 'provider_id', 'category_id'
  ];

    public function shopingCarts()
    {
        $this->belongsToMany('App\Shoping_Cart', 'product_carts', 'product_id', 'shoping_cart_id');
    }

    public function discounts()
    {
        return $this->belongsToMany('App\Discount', 'product_discounts', 'product_id', 'discount_id');
    }
}
