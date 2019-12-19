<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\User;

class AddressController extends Controller
{
    //Controlador del modelo de direcciones

    public function show($id)
    {
        $usuario = User::find($id);
        $vac = compact("usuario");
        return view('user.user', $vac);
    }

    public function addAddress(Request $req)
    {
        //dd($req);
        Address::create($req->all());
        return view('addresses.add');
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

    public function showModify($id)
    {
        $usuario = User::find($id);
        $vac = compact('usuario');
        return view('addresses.modify', $vac);
    }

    public function addressDelete(Request $req)
    {
        $id = $req['id'];
        $direccion = Address::find($id);
        $direccion->delete();
        return redirect('addresses.remove');
    }
}
