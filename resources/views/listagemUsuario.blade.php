@extends('layouts.modelo')

@section('conteudo')

        <h1>Usuário</h1>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Mensagem</th>
              </tr>
            </thead>
            <tbody>

                @foreach($usuarios as $usuario)
                    <tr>
                      <th scope='row'>{{$usuario->id}}</th>
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->email}}</td>
                      <td><a href="/usuario/mensagem/{{$usuario->id}}" class="btn btn-primary">Mensagem</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection
