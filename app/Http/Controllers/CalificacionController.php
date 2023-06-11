<?php

namespace App\Http\Controllers;
use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
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
    public function calificaciones()
    {
        $calificaciones = Calificacion::all(); // Obtén todas las calificaciones desde la base de datos

        return view('colegio.calificaciones', compact('calificaciones'));
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos enviados desde el formulario en la base de datos
        $request->validate([
            'actividad_id' => 'required',
            'alumno_id' => 'required',
            'nota' => 'required|numeric',
        ]);

        Calificacion::create($request->all());

        return redirect()->route('calificaciones.index')->with('success', 'La calificación se ha guardado correctamente.');
    }
}