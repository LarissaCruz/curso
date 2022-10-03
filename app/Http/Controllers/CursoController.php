<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $cursos = Cursos::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('cursos.index')->with('cursos', $cursos )
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create ()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $curso = Cursos::create($request->all());

        return redirect(route('cursos.index'))->with('mensagem.sucesso', "Curso de '{$curso->name}' adicionado com sucesso");;

    }
    public function destroy(Request $request) {
        Cursos::destroy($request->cursos);
    }
}
