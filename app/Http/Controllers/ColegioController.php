<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Horario;
use App\Models\Materia;
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
    public function materias()
    {
        return view('colegio.materias');
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
