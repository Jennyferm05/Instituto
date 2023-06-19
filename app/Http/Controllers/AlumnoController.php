<?php

namespace App\Http\Controllers;

use App\Models\Alumno; //
use App\Models\Grado;
use App\Models\Persona;
use App\Models\Jornada;
use App\Models\Docente;
use App\Models\Actividad;
use App\Models\Calificacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlumnoController extends Controller
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
    public function mostraralumnos()
    {
        $personas = Persona::all();
        $alumnos = Alumno::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $actividades = Actividad::all();
        $result = DB::table('calificacions')
            ->join('alumnos', 'calificacions.alumno_id', '=', 'alumnos.id')
            ->join('personas', 'alumnos.persona_id', '=', 'personas.id')
            ->select('personas.primer_nombre')
            ->get();

        $nombresAlumnos = $result->pluck('primer_nombre')->toArray();
        $promedios = Calificacion::orderBy('promedio', 'asc')->pluck('promedio')->toArray();

        return view('colegio.alumnos.alumnos', compact('nombresAlumnos', 'promedios', 'alumnos', 'personas', 'jornadas', 'grados'));

    }

    public function getalumnoadd()
    {
        $alumnos = Alumno::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $data = ['alumnos' => $alumnos, 'personas' => $personas, 'grados' => $grados, 'jornadas' => $jornadas];
        return view('colegio.alumnos.add', $data);
    }

    public function postalumnoadd(Request $request)
    {
        $request->validate(Alumno::rules());
        $alumno = new Alumno();
        $alumno->persona_id = $request->input('persona_id');
        $alumno->grado_id = $request->input('grado_id');
        $alumno->jornada_id = $request->input('jornada_id');
        if ($alumno->save()) {
            $personas = Persona::all();
            $grados = Grado::all();
            $alumnos = Alumno::get();
            $jornadas = Jornada::all();
            $alumno->delete();
            $data = ['alumno' => $alumno, 'alumnos' => $alumnos, 'personas' => $personas, 'grados' => $grados, 'jornadas' => $jornadas];
            return redirect()->route('mostraralumnos', $data)->with('agregado', 'Alumno Agregado Exitosamente');
        }
    }

    public function alumnos(Request $request)
    {
        $personas = Persona::all();
        $persona_id = $personas->pluck('persona_id')->toArray();
        $alumnos = Alumno::whereIn('id', $persona_id)->get();

        return view('colegio.alumnos.alumnos', [
            'alumnos' => $alumnos,
            'personas' => $personas
        ]);
    }
    public function getalumnoedit($id)
    {


        $alumno = Alumno::findOrFail($id);
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();

        return view('colegio.alumnos.edit', compact('alumno', 'personas', 'grados', 'jornadas'));


    }

    public function postalumnoedit(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);

        $alumno->persona_id = $request->input('persona_id');
        $alumno->grado_id = $request->input('grado_id');
        $alumno->jornada_id = $request->input('jornada_id');


        $alumno->save();

        return redirect()->route('mostraralumnos')->with('modificado', 'Alumno actualizado correctamente');
    }
    public function getalumnodelete($id)
    {
        // Buscar la persona por ID
        $alumno = Alumno::find($id);

        // Verificar si la persona existe
        if ($alumno) {
            $personas = Persona::all();
            $grados = Grado::all();
            $alumnos = Alumno::get();
            $jornadas = Jornada::all();
            $alumno->delete();
            $data = ['alumno' => $alumno, 'alumnos' => $alumnos, 'personas' => $personas, 'grados' => $grados, 'jornadas' => $jornadas];
            return redirect()->route('mostraralumnos', $data)->with('mensaje', 'Alumno Eliminado Exitosamente');
        } else {
            return response()->json(['message' => 'No se encontró la persona'], 404);
        }
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

        Calificacion::create($request->all());

        return redirect()->route('colegio.calificaciones.index')->with('success', 'Calificación guardada exitosamente.');
    }

    public function edit(Calificacion $calificacion)
    {
        $alumnos = Alumno::all();
        $docentes = Docente::all();
        $actividades = Actividad::all();
        return view('colegio.calificaciones.edit', compact('calificacion', 'alumnos', 'docentes', 'actividades'));
    }

    public function update(Request $request, Calificacion $calificacion)
    {
        $request->validate([
            'alumno_id' => 'required',
            'docente_id' => 'required',
            'actividad_id' => 'required',
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'nota3' => 'required|numeric',
        ]);

        $calificacion->update($request->all());

        return redirect()->route('calificaciones.index')->with('success', 'Calificación actualizada exitosamente.');
    }



}
