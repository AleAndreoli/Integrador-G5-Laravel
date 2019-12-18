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
        $this->belongsToMany('App\ShoppingCart', 'product_carts', 'product_id', 'shopping_cart_id');
    }

    public function discounts()
    {
        return $this->belongsToMany('App\Discount', 'product_discounts', 'product_id', 'discount_id');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider', 'provider_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function favorites()
    {
        return $this->belongsToMany('App\User', 'favorite_users', 'product_id', 'user_id');
    }
}
