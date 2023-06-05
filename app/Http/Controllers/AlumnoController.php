<?php

namespace App\Http\Controllers;

use App\Models\Alumno; //
use App\Models\Grupo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function alumnos()
    {
        $alumnos = Alumno::all();
        return view('colegio.alumnos.alumnos', compact('alumnos'));
    }

    public function getalumnoadd()
    {
        $grupos = Grupo::all();
        return view('colegio.alumnos.add', compact('grupos'));
    }

    public function postalumnoadd(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('nombre');
        $alumno->edad = $request->input('edad');
        $alumno->grupo_id= $request->input('grupo_id');
        if ($alumno->save()) {
            $alumnos = Alumno::all();
            return view('colegio.alumnos.alumnos',  compact('alumnos'));
        }
    }
    public function getalumnoedit($id)
    {
        $alumnos = Alumno::get();
        $grupos = Grupo::all();
        $alumno = Alumno::findOrFail($id);
        $data = ['alumno'=>$alumno,'grupos'=>$grupos,'alumnos'=>$alumnos];

        return view('colegio.alumnos.edit',$data);
    }
    public function postalumnoedit(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('nombre');
        $alumno->edad = $request->input('edad');
        $alumno->grupo_id= $request->input('grupo_id');
        if($alumno->save()){
            $alumnos = Alumno::get();
            $grupos = Grupo::all();
            $data = ['alumno'=>$alumno,'grupos'=>$grupos,'alumnos'=>$alumnos];
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
