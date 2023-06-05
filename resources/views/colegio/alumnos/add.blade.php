@extends('layouts.app')
@php
    $pageTitle = 'Nuevo Alumno';
@endphp
@section('content')
    <main class="py-4"></main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning">Agregar Alumnos</div>

                    <div class="card-body">
                        {!! Form::open(['url' => route('colegio.alumno.add')]) !!}
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            {!! Form::number('edad', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="grupo_id" class="form-label">Seleccione Grupo</label>
                            <select class="form-control" name="grupo_id" id="grupo_id" required>
                                <option value="">Seleccionar</option>
                                @foreach ($grupos as $grupo)
                                    <option value="{{ $grupo->id }}">{{ $grupo->Nombre }}</option>
                                @endforeach
                            </select>

                        </div>

                        {!! Form::submit('Agregar', ['class' => 'btn btn-primary', 'name' => 'agregar']) !!}
                        <a href="{{ route('alumnos')}}" class="btn btn-danger btn-xl">Cancelar</a>
                        {!! Form::close('Salir') !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
