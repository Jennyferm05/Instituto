<?php

namespace App\Http\Controllers;

use App\Models\Docente; //
use App\Models\Grado;
use App\Models\Persona;
use App\Models\Jornada;
use Illuminate\Http\Request;

class DocenteController extends Controller
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
    public function mostrardocentes()
    {
        $personas = Persona::all();
        $docentes = Docente::all();
        $grados = Grado::all();
        

        return view('colegio.docentes', compact('docentes', 'personas', ));

    }

    public function getdocenteodd()
    {
        $docentes = Docente::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $data = ['docentes'=>$docentes,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];
        return view('colegio.alumnos.odd',$data);
    }

    public function postdocenteodd(Request $request)
    {
        $docente = new Docente();
        $docente->persona_id = $request->input('persona_id');
        $docente->grado_id = $request->input('grado_id');
        $docente->jornada_id = $request->input('jornada_id');
        if ($docente->save()) {
            $docentes = Docente::all();
            $personas = Persona::all();
            return view('colegio.docentes',  compact('docentes', 'personas',));
        }
    }

    public function docentes(Request $request)
{
    $personas = Persona::all();
    $persona_id = $personas->pluck('persona_id')->toArray();
    $docentes = Docente::whereIn('id', $persona_id)->get();

    return view('colegio.docentes', [
        'docentes' => $docentes,
        'personas' => $personas
    ]);
}
    public function getdocenteedot($id)
    {
        $docentes = Docente::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $docente = Docente::findOrFail($id);
        $data = ['docente'=>$docente,'docentes'=>$docentes,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];

        return view('colegio.alumnos.edot',$data);
    }
    public function postdocenteedot(Request $request, $id)
    {
        $docente = Docente::findOrFail($id);
        $alumno->persona_id = $request->input('persona_id');
        $docente->grado_id = $request->input('grado_id');
        $docente->jornada_id = $request->input('jornada_id');
        if($docente->save()){
            $docentes = Docente::get();
        $personas = Persona::all();
        $grados = Grado::all();
        $jornadas = Jornada::all();
        $data = ['docente'=>$docente,'docentes'=>$docentes,'personas'=>$personas,'grados'=>$grados,'jornadas'=>$jornadas];
            return view('colegio.docentes',$data);
    }
    }
    public function getdocentedelete($id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();
        $docentes = Docente::get();
        $data = ['docente'=>$docente,'docentes'=>$docentes];
            return view('colegio.docente',$data)->with('eliminar', 'ok');
    }
}