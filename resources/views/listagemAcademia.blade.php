@extends('layouts.modelo')

@section('conteudo')
@if (isset($mensagem))
            <div class='alert alert-primary' >nova mensagem: {{$mensagem}}</div>
        @endif

        <h1>Academias</h1>
        <a href="academia/novo" class="btn btn-primary">Nova Academia</a>
        <a href="academia/pdf" class="btn btn-primary">Listagem</a>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Bairro</th>
                <th scope="col">Rua</th>
                <th scope="col">Numero</th>
                <th scope="col">Telefone</th>
                <th scope="col">Imagem</th>
                <th>Apagar</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>

                @foreach($academias as $academia)
                    <tr>
                      <th scope='row'>{{$academia->id}}</th>
                      <td>{{$academia->nome}}</td>
                      <td>{{$academia->bairro}}</td>
                      <td>{{$academia->rua}}</td>
                      <td>{{$academia->numero}}</td>
                      <td>{{$academia->telefone}}</td>
                      <td>
                        @if($academia->imagem)
                            <img src="{{ asset('storage/imagens/'.$academia->imagem) }}" style="width:50px;">
                        @endif
                      </td>
                      <td>
                      <a class='btn btn-danger' href='academia/apagar/{{$academia->id}}'>x</a></td>
                      <td>
                      <a class='btn btn-primary' href='academia/editar/{{$academia->id}}'>+</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection
