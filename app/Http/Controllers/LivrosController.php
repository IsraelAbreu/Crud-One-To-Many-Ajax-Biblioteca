<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Livros;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index(){
        $livros = Livros::with('categoria')->get();
        

        return view('livros.index', compact('livros'));
    }

    public function create(){
      
        $categorias = Categoria::get();

        return view ('livros.create', compact('categorias'));

    }
    public function store(Request $request){
        Livros::create($request->all());

        return redirect()->route('livro.index');
    }

    public function edit(Request $request, $id){

        $livros = Livros::with('categoria')->find($id);

        $categorias = Categoria::get();
        // dd($livros);
        return view('livros.edit', compact('livros', 'categorias'));
    }

    public function update(Request $request, $id){
        $livros = Livros::find($id);
        $livros->update($request->all());
        return redirect()->route('livro.index');
    }

    public function destroy($id){
        Livros::destroy($id);

    }
}
