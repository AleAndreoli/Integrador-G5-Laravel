<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //Controlador del modelo de proveedores

    public function show($id)
    {
        $producto = Provider::find($id);
        $vac = compact("proveedor");
        return view('product.producto', $vac);
    }

    public function addProduct(Request $req)
    {
        Product::create($req->all());
        return redirect('/product/add');
    }
}
