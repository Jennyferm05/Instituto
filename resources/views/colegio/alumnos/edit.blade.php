@extends('layouts.app')
@php
    $pageTitle = 'Editar Alumno';
@endphp
@section('content')
    <main class="py-4"></main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning">Editar Alumnos</div>

                    <form action="{{ route('colegio.alumno.edit', $alumno->id) }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="persona_id">Selecciona Persona Id:</label>
                            <select class="form-control" name="persona_id" id="persona_id">
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ $persona->primer_nombre }}
                                        {{ $persona->primer_apellido }}</option>
                                @endforeach
                            </select><br>
                            <label for="grado_id">Selecciona Grado Id:</label>
                            <select class="form-control" name="grado_id" id="grado_id">
                                @foreach ($grados as $grado)
                                    <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                                @endforeach
                            </select><br>
                            <label for="jornada_id">Selecciona Jornada Id:</label>
                            <select class="form-control" name="jornada_id" id="jornada_id">
                                @foreach ($jornadas as $jornada)
                                    <option value="{{ $jornada->id }}">{{ $jornada->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary" name="agregar" type="submit">Modificar</button>
                        <a href="{{ route('alumnos') }}" class="btn btn-danger btn-xl">Cancelar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
