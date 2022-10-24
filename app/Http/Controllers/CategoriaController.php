<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function create(){

        $categorias = Categoria::get();
        return view ('categoria.create', compact('categorias'));
    }
    public function store(Request $request){
        Categoria::create($request->all());
        return redirect()->route('livro.index');
    }

    public function destroy($id){
        Categoria::destroy($id);
    }
}
