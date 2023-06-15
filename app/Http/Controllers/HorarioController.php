<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Grado;

class HorarioController extends Controller
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
    public function nuevo_horario()
    {
        $materias = Materia::all();
        $grados = Grado::all();
        return view('colegio.horarios.horarios', compact('materias', 'grados'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'dia_de_la_semana' => 'required',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'materia_id' => 'required',
        ]);

        Horario::create($request->all());

        return redirect()->route('mostrarhorarios')
            ->with('success', 'Horario creado correctamente');
    }

    public function mostrarhorarios()
    {
        $grados = Grado::all();
        $materias = Materia::all();
        $horarios = Horario::all();
        return view('colegio.horarios.mostrar_horarios', compact('horarios', 'materias', 'grados'));
    }
    public function filtro(Request $request)
    {
        $grados = Grado::all();
        $grado_id = $request->input('grado_id');
        $horarios = Horario::where('grado_id', $grado_id)->get();
        $materias = Materia::all();

        return view('colegio.horarios.mostrar_horarios', compact('horarios', 'materias', 'grado_id', 'grados'));
    }


}
