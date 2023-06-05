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

                    <div class="card-body">
                        {!! Form::open(['url' => route('colegio.alumno.edit', $alumno->id)]) !!}
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            {!! Form::text('nombre', $alumno->nombre, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            {!! Form::text('apellido', $alumno->apellido, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            {!! Form::number('edad', $alumno->edad, ['class' => 'form-control']) !!}
                        </div>
                        <div class="mb-3">
                            <label for="grupo_id" class="form-label">Grupo_Id</label>
                            {!! Form::number('grupo_id', $alumno->grupo_id, ['class' => 'form-control']) !!}
                        </div>


                        {!! Form::submit('Modificar',['class' => 'btn btn-primary','name' => 'Modificar']) !!}
                        <a href="{{ route('alumnos') }}" class="btn btn-danger btn-xl">Cancelar</a>
                        {!! Form::close('Salir') !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
