<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Persona;
use App\Models\Grado;

class ColegioController extends Controller
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

    public function docentes()
    {
        return view('colegio.docentes');
    }
    public function mostrar_jornada()
    {
        return view('colegio.registros.mostrar_jornada');
    }


    public function mostrar_person_id(Request $request, $id)
    {
        $docentes = Docente::all();
        $docente_id = $docentes->pluck('docente_id')->toArray();
        $materias = Horario::whereIn('id', $docente_id)->get();

        return view('colegio.registros.index', [
            'docentes' => $docentes,
            'materias' => $materias,
        ]);
    }
    public function mostrar_materia(Request $request)
    {
        $materias = Materia::all();
        $materia_id = $materias->pluck('materia_id')->toArray();
        $horarios = Horario::whereIn('id', $materia_id)->get();

        return view('colegio.horarios.mostrar_horarios', [
            'horarios' => $horarios,
            'materias' => $materias
        ]);
    }

    public function mostrar_grado(Request $request)
    {
        $grados = Grado::all();
        $grado_id = $grados->pluck('grado_id')->toArray();
        $horarios = Horario::whereIn('id', $grado_id)->get();

        return view('colegio.horarios.mostrar_horarios', [
            'horarios' => $horarios,
            'grados' => $grados
        ]);
    }
    public function mostrar_dia(Request $request)
    {
        $grados = Grado::all();
        $grado_id = $grados->pluck('grado_id')->toArray();
        $horarios = Horario::whereIn('id', $grado_id)->get();

        return view('colegio.horarios.mostrar_horarios', [
            'horarios' => $horarios,
            'grados' => $grados
        ]);
    }

}
