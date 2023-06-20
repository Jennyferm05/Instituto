<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Alumno;
use App\Models\Persona;
use App\Models\Docente;
use App\Models\Actividad;




use Illuminate\Http\Request;

class CalificacionController extends Controller
{

    public function mostrarcalificaciones()
    {
        $alumnos = Alumno::all();
        $docentes = Docente::all();
        $actividades = Actividad::all();
        $calificaciones = Calificacion::all();
        $personas = Persona::all();

        return view('colegio.calificaciones.calificaciones', compact('alumnos', 'docentes', 'actividades', 'calificaciones', 'personas'));
    }
    public function create()
    {
        $alumnos = Alumno::all();
        $docentes = Docente::all();
        $actividades = Actividad::all();
        return view('colegio.calificaciones.create', compact('alumnos', 'docentes', 'actividades'));
    }

    public function store(Request $request)
    {
        $alumno_id = $request->input('alumno_id');
        $alumno = Alumno::with('persona')->find($alumno_id);
        $nombre_alumno = $alumno->persona->primer_nombre;

        $docente_id = $request->input('docente_id');
        $docente = Docente::with('persona')->find($docente_id);
        $nombre_docente = $docente->persona->primer_nombre;

        $calificacion = new Calificacion();
        $calificacion->alumno_id = $request->input('alumno_id');
        $calificacion->docente_id = $request->input('docente_id');
        $calificacion->actividad_id = $request->input('actividad_id');
        $calificacion->nota1 = $request->nota1;
        $calificacion->nota2 = $request->nota2;
        $calificacion->nota3 = $request->nota3;
        $calificacion->promedio = ($request->nota1 + $request->nota2 + $request->nota3) / 3;

        if ($calificacion->save()) {
            $alumnos = Alumno::all();
            $docentes = Docente::all();
            $personas = Persona::all();

            $data = ['alumno' => $alumno, 'alumnos' => $alumnos, 'personas' => $personas, 'docentes' => $docentes, 'nombre_alumno' => $nombre_alumno, 'nombre_docente' => $nombre_docente];
            return redirect()->route('mostrarcalificaciones', $data)->with('success', 'Calificación agregada exitosamente.');
        }
    }
}
