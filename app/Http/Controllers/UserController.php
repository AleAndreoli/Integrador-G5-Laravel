<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    // Este controlador maneja el modelo de Usuarios

    public function createUser(Request $req){

      $usuario = User::create($req->all());

      return redirect('/index')

    }


    public function logoutUser(){

      Auth::logout();
      return redirect('/')

    }

}
