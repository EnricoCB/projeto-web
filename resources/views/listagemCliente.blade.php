@extends('layouts.modelo')

@section('conteudo')
    <h1>Clientes</h1>
    <a href="cliente/novo" class="btn btn-primary">Novo Cliente</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Senha</th>
            <th scope="col">Academia</th>

            <th>Apagar</th>
            <th>Editar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($clientes as $cliente)
                <tr>
                    <th scope='row'>{{$cliente->id}}</th>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->senha}}</td>
                    <td>{{$cliente->academia->nome}}</td>
                    <td>
                    <a class='btn btn-danger' href='cliente/apagar/{{$cliente->id}}'>x</a></td>
                    <td>
                    <a class='btn btn-primary' href='cliente/editar/{{$cliente->id}}'>+</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


