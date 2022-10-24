@extends('layout.app')
@section('content')
    <h1>Meus Livros</h1>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Numero do Livro</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Categoria</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($livros as $livro)
            <tr id="tr-livro-{{$livro->id}}">
                <th>{{$livro->id}}</th>
                <td>{{$livro->nome}}</td>
                <td>{{$livro->autor}}</td>
                <td>{{$livro->categoria->nome}}</td>
                <td>
                    <a href="{{ route('livro.edit', $livro->id) }}" class="btn btn-warning">Editar</a>
                </td>
                <td>
                    <a onclick="DeletarLivro({{$livro->id}})" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
@endsection