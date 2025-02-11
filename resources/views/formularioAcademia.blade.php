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
    <h1>Academia</h1>
    @if($academia->imagem)
        <img src="/storage/imagens/{{$academia->imagem}}" style="width:200px;">
    @endif

    <form action="{{url('academia/salvar')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$academia->id}}">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{old('nome', $academia->nome)}}">
            @error('nome')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control @error('bairro') is-invalid @enderror" id="bairro" name="bairro" value="{{old('bairro', $academia->bairro)}}">
            @error('bairro')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rua" class="form-label">Rua</label>
            <input type="text" class="form-control @error('rua') is-invalid @enderror" id="rua" name="rua" value="{{old('rua', $academia->rua)}}">
            @error('rua')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> 
        <div class="mb-3">
            <label for="numero" class="form-label">Numero</label>
            <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" value="{{old('numero', $academia->numero)}}">
            @error('numero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{old('telefone', $academia->telefone)}}">
            @error('telefone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="arquivo" class="form-label">Arquivo</label>
            <input type="file" class="form-control" id="arquivo" name="arquivo">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
