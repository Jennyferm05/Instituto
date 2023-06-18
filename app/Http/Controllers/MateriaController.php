<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Grado;
use App\Models\Persona;
use Illuminate\Validation\Rule;

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
    public function postmaterias(Request $request)
    {
        $docente_id = $request->input('docente_id');
        $docente = Docente::with('persona')->find($docente_id);
        $primer_nombre = $docente->persona->primer_nombre;

        $materia = new Materia();
        $materia->nombre = $request->input('nombre');
        $materia->descripcion = $request->input('descripcion');
        $materia->docente_id = $request->input('docente_id');

        if ($materia->save()) {
            $alumnos = Materia::all();
            $docentes = Persona::all();
            $personas = Persona::all();
            return view('colegio.alumnos.alumnos',  compact('alumnos', 'personas'));
        }
    }





}
