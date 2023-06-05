<?php

namespace App\Http\Controllers;

use App\Models\User; //

use Illuminate\Http\Request;

class ColegioController extends Controller
{

    public function docentes()
    {
        return view('colegio.docentes');
    }
    public function materias()
    {
        return view('colegio.materias');
    }
    public function horarios()
    {
        return view('colegio.horarios');
    }
    public function usuarios()
    {
        $users = User::all();
        return view('colegio.usuarios', compact('users'));
    }
}
