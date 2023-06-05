<?php

namespace App\Http\Controllers;

use App\Models\Grupo; //
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function grupos()
    {
        $grupos = Grupo::all();
        return view('colegio.alumno.add', compact('grupos'));
    }
    public function grupo_id(Request $request)
    {
        $grupo = new Grupo();
        $grupo->nombre = $request->input('Nombre');
        if ($grupo->save()) {
            $grupo = Grupo::all();
            return view('colegio.alumnos.alumnos',  compact('alumnos'));
        }
    }
}
