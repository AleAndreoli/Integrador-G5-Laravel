<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    // Controlador del modelo de UserController

    public function show($id)
    {
        $usuario = User::find($id);
        $vac = compact('usuario', 'direcciones');
        return view('user.user', $vac);
    }

    public function update($id, Request $req)
    {
        $req->validate([
          'password' => ['string', 'min:8', 'confirmed', 'regex:/(?=.*[a-zA-Z])(?=.*[0-9])/'],
          'password-confirm' => ['same:password']
        ]);

        $usuario = User::find($id);
        $usuario->fill($req->all());
        $usuario->password = Hash::make($req->password);
        $usuario->save();
        return $this->show($id);
    }
}
