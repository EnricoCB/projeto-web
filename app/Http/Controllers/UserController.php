<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensagemUsuario;

class UserController extends Controller
{
    function listar() {
        $usuarios = User::all();
        return view('listagemUsuario', compact('usuarios'));
    }

    function mensagem($id) {
        $usuario = User::find($id);
        return view('formularioMensagem', compact('usuario'));
    }

    function sendMail(Request $request) {
        $mensagem = $request->input('mensagem');
        $usuario = User::find($request->input('id'));

        Mail::to($usuario->email)->send(new MensagemUsuario($mensagem));

        return redirect('/usuario');
    }
}
