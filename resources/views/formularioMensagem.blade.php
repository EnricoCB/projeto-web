@extends('layouts.modelo')

@section('conteudo')
    <h1>Mensagem para Usuário: {{$usuario->name}} ({{$usuario->email}})</h1>

    <form action="{{url('usuario/sendMail')}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="id" value='{{$usuario->id}}'>
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea name="mensagem" class="form-control" style="height: 10rem;width: 100%"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
