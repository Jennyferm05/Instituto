<?php

namespace App\Http\Controllers;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    public function calificaciones()
    {
        $calificaciones = Calificacion::all(); // Obtén todas las calificaciones desde la base de datos

        return view('colegio.calificaciones', compact('calificaciones'));
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos enviados desde el formulario en la base de datos
        $request->validate([
            'estudiante' => 'required',
            'asignatura' => 'required',
            'calificacion' => 'required|numeric',
        ]);

        Calificacion::create($request->all());

        return redirect()->route('calificaciones.index')->with('success', 'La calificación se ha guardado correctamente.');
    }
}