<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Grado;
use App\Models\Persona;

class MateriaController extends Controller
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
    public function index()
    {
        $materias = Materia::all();
        $docentes = Docente::all();
        $personas = Persona::all();
        return view('colegio.registros.index', compact('docentes', 'materias', 'personas'));
    }
    public function nueva_materia()
    {
        $docentes = Docente::all();
        return view('colegio.registros.materias', compact('docentes'));
    }
    public function postmaterias(Request $request, Materia $materias)
    {

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'docente_id' => 'required',
        ]);

        $materias = Materia::create($request->all());

        return redirect()->route('materias')
            ->with('success', 'Materia creada correctamente');

    }


}
