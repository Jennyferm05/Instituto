<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColegioControlller extends Controller
{
    public function grupos()
    {
        return view('colegio.grupos');
    }
    public function alumnos()
    {
        return view('colegio.alumnos');
    }
    public function docentes()
    {
        return view('colegio.docentes');
    }
    public function alumnos()
    {
        return view('colegio.alumnos');
    }
}
