<?php

namespace App\Http\Controllers;
use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
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
    public function grados()
    {
        $grados = Grado::all();
        return view('colegio.grados', compact('grados'));
    }
}