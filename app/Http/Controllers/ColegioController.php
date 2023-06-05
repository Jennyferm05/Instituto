<?php

namespace App\Http\Controllers;

use App\Models\Grupo; //

use Illuminate\Http\Request;

class ColegioController extends Controller
{
    public function alumnos()
    {
        return view('colegio.alumnos');
    }
    public function docentes()
    {
        return view('colegio.docentes');
    }
    public function materias()
    {
        return view('colegio.materias');
    }
    public function calificaciones()
    {
        return view('colegio.calificaciones');
    }
    public function horarios()
    {
        return view('colegio.horarios');
    }
    public function usuarios()
    {
        return view('colegio.usuarios');
    }
}
