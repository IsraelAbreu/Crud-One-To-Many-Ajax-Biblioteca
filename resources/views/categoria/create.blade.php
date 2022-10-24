@extends('layout.app')
@section('content')
    <div class="mt-5 mb-5">
        <form action="{{route('categoria.store')}}" method="post">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <div class="form-floating mb-3">
                <input type="text" class="form-control"  placeholder="name@example.com" name="nome">
                <label for="categoria">Categoria</label>
              </div>
              <div class="">
                <button class="btn btn-primary" type="submit">Criar categoria</button>
              </div>
        </form>
    </div>
    <hr>
    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">nome</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categorias as $categoria)
          <tr id="tr-categoria-{{$categoria->id}}">
              <th>{{$categoria->id}}</th>
              <td>{{$categoria->nome}}</td>
              <td>
                  <a onclick="DeletarCategoria({{$categoria->id}})" class="btn btn-danger">Deletar</a>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection