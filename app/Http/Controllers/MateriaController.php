<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\Grado;

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
}
