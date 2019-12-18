<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'price', 'name', 'description', 'provider_id', 'category_id'
  ];
}