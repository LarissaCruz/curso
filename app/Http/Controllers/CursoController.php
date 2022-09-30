<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $cursos = [
            'Analise',
            'Historia',
            'Matematica'
        ];

        return view('cursos.index')->with('cursos', $cursos );

    }
    public function create ()
    {
        return view('cursos.create');
    }
    public function store(Request $request)
    {
        $nomeCurso = $request->input('nome');
        if (DB::insert('INSERT INTO cursos (nome) VALUES(?)', [$nomeCurso])){
            return "OK";
        }else{
            return "Deu erro";
        }
    }
}
