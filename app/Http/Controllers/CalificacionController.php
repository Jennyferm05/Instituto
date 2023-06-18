<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Alumno;
use App\Models\Colegio;
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
    
        return view('calificacion.create', compact('alumnos', 'docentes', 'actividades'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'alumno_id' => 'required',
            'docente_id' => 'required',
            'actividad_id' => 'required',
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'nota3' => 'required|numeric',
        ]);
    
        $calificacion = new Calificacion();
        $calificacion->alumno_id = $request->alumno_id;
        $calificacion->docente_id = $request->docente_id;
        $calificacion->actividad_id = $request->actividad_id;
        $calificacion->nota1 = $request->nota1;
        $calificacion->nota2 = $request->nota2;
        $calificacion->nota3 = $request->nota3;
        // Calcula el promedio
        $calificacion->promedio = ($request->nota1 + $request->nota2 + $request->nota3) / 3;
        $calificacion->save();
    
        return redirect()->route('colegio.calificaciones')->with('success', 'Calificación agregada exitosamente.');
    }
}