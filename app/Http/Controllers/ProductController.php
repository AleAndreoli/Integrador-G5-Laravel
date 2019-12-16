<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Provider;

class ProductController extends Controller
{
    // Controlador para el modelo de productos

    public function show($id)
    {
        $producto = Product::find($id);
        $vac = compact("producto");
        return view('product.producto', $vac);
    }

    public function addProduct()
    {
        $proveedores = Provider::all();
        $vac = compact('proveedores');
        return view('/product.add', $vac);
    }

    public function storeProduct(Request $req)
    {
        Product::create($req->all());
        return redirect('/product/add');
    }
}
