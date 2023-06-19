<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Grado;
use App\Models\Alumno;
use App\Models\Jornada;



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
    public function mostrar_grado_alumnos(Request $request)
    {
        $grados = Grado::all();
        $grado_id = $grados->pluck('grado_id')->toArray();
        $alumnos = Alumno::whereIn('id', $grado_id)->get();

        return view('colegio.alumnos.alumnos', [
            'docentes' => $alumnos,
            'grados' => $grados
        ]);
    }
    public function mostrar_jornada_alumnos(Request $request)
    {
        $jornadas = Jornada::all();
        $jornada_id = $jornadas->pluck('jornada_id')->toArray();
        $alumnos = Alumno::whereIn('id', $jornada_id)->get();

        return view('colegio.alumnos.alumnos', [
            'docentes' => $alumnos,
            'jornadas' => $jornadas
        ]);
    }
    public function mostrar_jornada_docentes(Request $request)
    {
        $jornadas = Jornada::all();
        $jornada_id = $jornadas->pluck('jornada_id')->toArray();
        $docentes = Docente::whereIn('id', $jornada_id)->get();

        return view('colegio.docentes.docentes', [
            'docentes' => $docentes,
            'jornadas' => $jornadas
        ]);
    }


}
