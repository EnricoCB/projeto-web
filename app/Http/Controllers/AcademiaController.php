<?php

namespace App\Http\Controllers;

use App\Http\Requests\AcademiaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Academia;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class AcademiaController extends Controller
{
    function pdf() {
        $academias = Academia::orderBy('nome')->get();
        $pdf = Pdf::loadView('listagemAcademiaPDF', compact('academias'));
        return $pdf->download('academias.pdf');

    }

    function listar() {
        $academias = Academia::orderBy('nome')->get();
        return view('listagemAcademia', compact('academias'));
    }

    function novo() {
        $academia = new Academia();
        $academia->id = 0;
        $academia->nome = "";
        $academia->bairro = "";
        $academia->rua = "";
        $academia->numero = "";
        $academia->telefone = "";
        return view('formularioAcademia', compact('academia'));
    }

    function salvar(AcademiaRequest $request) {
        if ($request->input('id') == 0)  {
            $academia = new Academia();
        } else {
            $academia = Academia::find($request->input('id'));
        }

        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file("arquivo");
            $caminho_arquivo = $arquivo->store('public/imagens');
            $vetor_arquivo = explode('/', $caminho_arquivo);

            if ($academia->imagem != '') {
                Storage::delete('public/imagens/'.$academia->imagem);
            }
            $academia->imagem = $vetor_arquivo[2];
        }

        $academia->nome = $request->input('nome');
        $academia->bairro = $request->input('bairro');
        $academia->rua = $request->input('rua');
        $academia->numero = $request->input('numero');
        $academia->telefone = $request->input('telefone');
        $academia->save();
        return redirect('academia');
    }

    function editar($id) {
        $academia = Academia::find($id);
        return view('formularioAcademia', compact('academia'));
    }

    function apagar($id) {
        $academia = Academia::find($id);
        $academia->delete();
        return redirect('academia');
    }

}
