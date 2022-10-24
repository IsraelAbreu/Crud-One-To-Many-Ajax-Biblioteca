@extends('layout.app')
@section('content')
    <div class="mt-5">
        <form action="{{route('livro.update', $livros->id)}}" method="post">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  placeholder="name@example.com" name="nome" value="{{$livros->nome}}">
                <label for="categoria">Livro</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  placeholder="name@example.com" name="autor" value="{{$livros->autor}}">
                <label for="categoria">Autor</label>
            </div>
            <select class="form-control" name="id_categoria" id="">

                <option value="{{$livros->id_categoria}}">{{$livros->categoria->nome}}</option> <!--Apenas listar o selecionado-->

                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                @endforeach

            </select>
            <div class="mt-2">
                <button class="btn btn-primary form-control" type="submit">Criar categoria</button>
            </div>
        </form>
    </div>
@endsection