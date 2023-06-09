<?php

namespace App\Http\Controllers;

use App\Models\Grupo; //
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function grupos()
    {
        $grupos = Grupo::all();
        return view('colegio.grupos', compact('grupos'));
    }
}
