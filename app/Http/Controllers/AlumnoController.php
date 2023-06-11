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
    public function alumnos()
    {
        $alumnos = Alumno::all();
        return view('colegio.alumnos.alumnos', compact('alumnos'));
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
        $alumno = new Alumno();
        $alumno->persona_id = $request->input('persona_id');
        $alumno->grado_id = $request->input('grado_id');
        $alumno->jornada_id = $request->input('jornada_id');
        if ($alumno->save()) {
            $alumnos = Alumno::all();
            return view('colegio.alumnos.alumnos',  compact('alumnos'));
        }
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
}
