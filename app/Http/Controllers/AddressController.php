<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    //Controlador del modelo de direcciones

    public function show($id)
    {
        $direccion = Address::find($id);
        $vac = compact("direccion");
        return view('addresses.address', $vac);
    }

    public function addAddress(Request $req)
    {
        Address::create($req->all());
        return view('address.add');
    }

    public function directory()
    {
        $direcciones = Address::all();
        $vac = compact('direcciones');
        return view('addresses.addresseslist', $vac);
    }

    public function update($id, Request $req)
    {
        $direccion = Address::find($id);
        $direccion->fill($req->all());
        $direccion->save();
        return $this->directory();
    }
}
