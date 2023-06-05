<?php

namespace App\Http\Controllers;

use App\Models\Grupo; //
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function grupos()
    {
        $grupos = Grupo::all();
        return view('colegio.grupos', compact('grupos'));
    }
}
