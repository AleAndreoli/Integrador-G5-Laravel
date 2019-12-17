<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProviderController extends Controller
{
    //Controlador del modelo de proveedores

    public function show($id)
    {
        $proveedor = Provider::find($id);
        $vac = compact("proveedor");
        return view('providers.provider', $vac);
    }

    public function addProvider(Request $req)
    {
        Provider::create($req->all());
        return view('providers.add');
    }

    public function directory()
    {
        $proveedores = Provider::all();
        $vac = compact('proveedores');
        return view('providers.providerlist', $vac);
    }

    public function update($id, Request $req)
    {
        $proveedor = Provider::find($id);
        $proveedor->fill($req->all());
        $proveedor->save();
        return $this->directory();
    }
}
