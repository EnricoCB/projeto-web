<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Academia;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    function listar() {
        $clientes = Cliente::orderBy('id')->get();
        return view('listagemCliente', compact('clientes'));
    }

    function novo() {
        $cliente = new Cliente();
        $cliente->id = 0;
        $cliente->nome = "";
        $cliente->email = "";
        $cliente->senha = "";

        $academias = Academia::orderBy('nome')->get();
        return view('formularioCliente', compact('cliente', 'academias'));
    }


    function salvar(ClienteRequest $request) {
        if ($request->input('id') == 0)  {
            $cliente = new Cliente();
        } else {
            $cliente = Cliente::find($request->input('id'));
        }
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->senha = $request->input('senha');
        $cliente->academia_id = $request->input('academia_id');
        $cliente->save();
        return redirect('cliente');
    }


    function editar($id) {
        $cliente = Cliente::find($id);
        $academias = academia::orderBy('nome')->get();
        return view('formularioCliente', compact('cliente', 'academias'));
    }

    function apagar($id) {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('cliente');
    }
}
