<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $request)
    {
        $cursos = Cursos::all();

        return view('cursos.index')->with('cursos', $cursos );

    }
    public function create ()
    {
        return view('cursos.create');
    }
    public function store(Request $request)
    {
        $nomeCurso = $request->input('nome');
        $curso = new Cursos();
        $curso->name=$nomeCurso;
        $curso->save();
        return redirect('cursos');

    }
}
