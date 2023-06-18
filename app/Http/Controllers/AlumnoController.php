<?php

namespace App\Http\Controllers;

use App\Models\Alumno; //
use App\Models\Grado;
use App\Models\Persona;
use App\Models\Jornada;
use Illuminate\Http\Request;

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
        return view('colegio.alumnos.alumnos', compact('alumnos', 'personas'));

    }

    public function getalumnoadd()
    {
        $alumnos = Alumno::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $data = ['alumnos'=>$alumnos,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];
        return view('colegio.alumnos.add',$data);
    }

    public function postalumnoadd(Request $request)
    {
        $request->validate(Alumno::rules());
        $alumno = new Alumno();
        $alumno->persona_id = $request->input('persona_id');
        $alumno->grado_id = $request->input('grado_id');
        $alumno->jornada_id = $request->input('jornada_id');
        if ($alumno->save()) {
            $alumnos = Alumno::all();
            $personas = Persona::all();
            return view('colegio.alumnos.alumnos',  compact('alumnos', 'personas'));
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
        $alumnos = Alumno::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $alumno = Alumno::findOrFail($id);
        $data = ['alumno'=>$alumno,'alumnos'=>$alumnos,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];

        return view('colegio.alumnos.edit',$data);
    }
    public function postalumnoedit(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->persona_id = $request->input('persona_id');
        $alumno->grado_id = $request->input('grado_id');
        $alumno->jornada_id = $request->input('jornada_id');
        if($alumno->save()){
            $alumnos = Alumno::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $data = ['alumno'=>$alumno,'alumnos'=>$alumnos,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];
            return view('colegio.alumnos.alumnos',$data);
    }
    }
    public function getalumnodelete($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        $alumnos = Alumno::get();
        $data = ['alumno'=>$alumno,'alumnos'=>$alumnos];
            return view('colegio.alumnos.alumnos',$data)->with('eliminar', 'ok');
    }



// AlumnoController.php
public function index()
{
    $alumnos = Alumno::all();
    return view('alumnos.index', compact('alumnos'));
}







public function create()
{
    $alumnos = Alumno::all();
    $docentes = Docente::all();
    $actividades = Actividad::all();
    return view('calificaciones.create', compact('alumnos', 'docentes', 'actividades'));
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

    return redirect()->route('calificaciones.index')->with('success', 'Calificación guardada exitosamente.');
}

public function edit(Calificacion $calificacion)
{
    $alumnos = Alumno::all();
    $docentes = Docente::all();
    $actividades = Actividad::all();
    return view('calificaciones.edit', compact('calificacion', 'alumnos', 'docentes', 'actividades'));
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
