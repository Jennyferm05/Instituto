<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //
use App\Models\Persona; //

class PersonaController extends Controller
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
    public function usuarios()
    {
        $users = User::all();
        return view('colegio.usuarios.usuarios', compact('users'));
    }
    public function personas()
    {
        $personas = Persona::all();
        return view('colegio.usuarios.personas', compact('personas'));
    }
}
