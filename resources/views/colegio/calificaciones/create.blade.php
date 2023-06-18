@extends('layouts.app')

@section('content')
    <h1>Crear Calificación</h1>

    <form action="{{ route('calificaciones.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="alumno_id">Alumno</label>
            <select name="alumno_id" id="alumno_id" class="form-control">
                <option value="" disabled selected>Selecciona un Alumno</option>
                @foreach ($alumnos as $alumno)
                    <option value="{{ $alumno->id }}">{{ $alumno->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="docente_id">Docente</label>
            <select name="docente_id" id="docente_id" class="form-control">
                <option value="" disabled selected>Selecciona un Docente</option>
                @foreach ($docentes as $docente)
                    <option value="{{ $docente->id }}">{{ $docente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="actividad_id">Actividad</label>
            <select name="actividad_id" id="actividad_id" class="form-control">
                <option value="" disabled selected>Selecciona una Actividad</option>
                @foreach ($actividades as $actividad)
                    <option value="{{ $actividad->id }}">{{ $actividad->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" id="nota1" class="form-control">
        </div>

        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" id="nota2" class="form-control">
        </div>

        <div class="form-group">
            <label for="nota3">Nota 3</label>
            <input type="number" name="nota3" id="nota3" class="form-control">
        </div>

        <!-- Agrega aquí más campos y elementos del formulario según tus necesidades -->

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
