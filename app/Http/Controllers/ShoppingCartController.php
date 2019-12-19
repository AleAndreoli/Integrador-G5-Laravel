<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;

class ShoppingCartController extends Controller
{
    // Controlador de la tabla shoping_carts

    public function addProduct(Request $req){
      if(session()->has('cart')){

      }else{
        ShoppingCart::create()
      }
}
