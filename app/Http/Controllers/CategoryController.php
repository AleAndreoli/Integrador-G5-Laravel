<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    // Controlador del modelo de categorias

    public function show($id)
    {
        $categoria = Provider::find($id);
        $vac = compact("categoria");
        return view('categories.categorie', $vac);
    }

    public function addCategory()
    {
        $categorias = Category::all();
        $vac = compact('categorias');
        return view('/categories.add', $vac);
    }

    public function storeCategory(Request $req)
    {
        Category::create($req->all());
        return redirect('/category/add');
    }

    public function directory()
    {
        $categorias = Category::all();
        $vac = compact('categorias');
        return view('categories.list', $vac);
    }

    public function update($id, Request $req)
    {
        $categoria = Category::find($id);
        $categoria->fill($req->all());
        $categoria->save();
        return $this->directory();
    }
}
