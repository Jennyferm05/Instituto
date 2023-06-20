@extends('layouts.app')
@php
    $pageTitle = 'Editar Horario';
@endphp
@section('content')
    <main class="py-4"></main>
    @if (session('modificado'))
        <div class="alert alert-success">{{ session('modificado') }}</div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning">Editar Horarios</div>
                    <div class="card-body">

                        <form action="{{ route('horario_editado', $horario->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                          
                            <label for="dia">Día:</label>
                            <select name="dia" id="dia">
                              <option value="lunes" {{ $horario->dia == 'lunes' ? 'selected' : '' }}>Lunes</option>
                              <option value="martes" {{ $horario->dia == 'martes' ? 'selected' : '' }}>Martes</option>
                              <option value="miércoles" {{ $horario->dia == 'miércoles' ? 'selected' : '' }}>Miércoles</option>
                              <option value="jueves" {{ $horario->dia == 'miércoles' ? 'selected' : '' }}>Miércoles</option>
                              <option value="viernes" {{ $horario->dia == 'miércoles' ? 'selected' : '' }}>Miércoles</option>

                            </select>
                          
                            <label for="hora_inicio">Hora de inicio:</label>
                            <input type="time" name="hora_inicio" id="hora_inicio" value="{{ $horario->hora_inicio }}">
                          
                            <label for="hora_fin">Hora de fin:</label>
                            <input type="time" name="hora_fin" id="hora_fin" value="{{ $horario->hora_fin }}">
                          
                            <label for="materia_id">Materia:</label>
                            <select name="materia_id" id="materia_id">
                              @foreach($materias as $materia)
                                <option value="{{ $materia->id }}" {{ $horario->materia_id == $materia->id ? 'selected' : '' }}>
                                  {{ $materia->nombre }}
                                </option>
                              @endforeach
                            </select>
                          
                            <label for="grado_id">Grado:</label>
                            <select name="grado_id" id="grado_id">
                              @foreach($grados as $grado)
                                <option value="{{ $grado->id }}" {{ $horario->grado_id == $grado->id ? 'selected' : '' }}>
                                  {{ $grado->nombre }}
                                </option>
                              @endforeach
                            </select>
                          
                            <button class="btn btn-primary" name="agregar" type="submit">Modificar</button>
                            <a href="{{ route('mostraralumnos') }}" class="btn btn-danger btn-xl">Cancelar</a>
                          </form>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
