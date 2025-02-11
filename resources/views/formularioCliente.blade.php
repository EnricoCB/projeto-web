@extends('layouts.modelo')

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Cliente</h1>
    @if($cliente->imagem)
        <img src="/storage/imagens/{{$cliente->imagem}}" style="width:40%;">
    @endif

    <form action="{{url('cliente/salvar')}}" method="POST" enctype="multipart/form-email">

        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$cliente->id}}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{old('nome', $cliente->nome)}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email', $cliente->email)}}">
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha"  value="{{old('senha', $cliente->senha)}}">
        </div>

        <div class="mb-3">
            <label for="academia_id" class="form-label">Academia</label>
            <select class="form-select" name="academia_id" id="academia_id">
                @foreach($academias as $academia)
                    <option {{ $cliente->academia == null || $academia->id != old('academia_id', $cliente->academia->id) ? '' : 'selected' }} value='{{$academia->id}}'>{{$academia->nome}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
