<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Controlador para el modelo de productos
    /*
        public function storeProduct(Request $req){

          return view()
        }*/

    public function show($id)
    {
        $producto = Product::find($id);
        $vac = compact("producto");
        return view('product.producto', $vac);
    }
}
