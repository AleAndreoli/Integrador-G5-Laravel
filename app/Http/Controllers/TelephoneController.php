<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telephone;

class TelephoneController extends Controller
{
    //Controlador del modelo de telefonos

    public function show($id=null)
    {
        $telefono = Telephone::find($id);
        $vac = compact("telefono");
        return view('telephones.add', $vac);
    }

    public function addTelephone(Request $req)
    {
        Telephone::create($req->all());
        return view('telephones.add');
    }

    public function directory()
    {
        $telefono = Telephone::all();
        $vac = compact('telefono');
        return view('telephones.telephonelist', $vac);
    }

    public function update($id, Request $req)
    {
        $telefono = Telephone::find($id);
        $telefono->fill($req->all());
        $telefono->save();
        return $this->directory();
    }

}
