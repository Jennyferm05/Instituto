@extends('layouts.app')
@php
    $pageTitle = 'Nuevo Docente';
@endphp
@section('content')
    <main class="py-4"></main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning">Agregar Docentes</div>
                    <div class="card-body">
                        <form action="{{ route('colegio.alumno.odd') }}" method="POST">
                            @csrf

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
                            </select><br>

                            <button class="btn btn-primary" name="agregar" type="submit">Agregar</button>
                            <a href="{{ route('mostrardocentes') }}" class="btn btn-danger btn-xl">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
