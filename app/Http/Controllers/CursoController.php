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
        Cursos::create($request->all());

        return redirect(route('cursos.index'));

    }
    public function destroy(Request $request) {
        Cursos::destroy($request->cursos);
    }
}
