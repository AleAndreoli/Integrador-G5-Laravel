<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Modelo de la clase categoria

    protected $fillable = [
      'name', 'category_id'
  ];
}
