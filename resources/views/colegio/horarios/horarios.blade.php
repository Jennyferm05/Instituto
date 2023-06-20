@extends('layouts.app')
@php
    $pageTitle = 'Horarios';
@endphp
@section('css')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
@endsection
@section('content')
    <main class="py-4"></main>
    @if (session('mensaje'))
    <div class="alert alert-danger">{{ session('mensaje') }}</div>
@endif
@if (session('modificado'))
        <div class="alert alert-warning">{{ session('modificado') }}</div>
    @endif

    @if (session('agregado'))
    <div class="alert alert-success">{{ session('agregado') }}</div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-warning">Agregar Horarios</div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="dia_de_la_semana">Dia de la semana:</label>
                                <select class="form-control" id="dia_de_la_semana" name="dia_de_la_semana">

                                    <option value="">Seleccione dia</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miercoles">Miercoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="hora_inicio">Hora de inicio:</label>
                                <input class="form-control" type="time" name="hora_inicio" required>
                            </div>

                            <div class="form-group">
                                <label for="hora_fin">Hora de fin:</label>
                                <input class="form-control" type="time" name="hora_fin" required>

                            </div>
                            <div class="form-group">
                                <label for="materia_id">Materia:</label>
                                <select class="form-control" name="materia_id" required>
                                    <option value="0">Seleccione materia</option>
                                    @foreach ($materias as $materia)
                                        <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="grado_id">Grado:</label>
                                <select class="form-control" name="grado_id" required>
                                    <option value="0">Seleccione grado</option>
                                    @foreach ($grados as $grado)
                                        <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                                <button class="btn btn-primary" name="agregar" type="submit">Agregar</button>
                                <a href="{{ route('mostrarhorarios') }}" class="btn btn-danger btn-xl">Cancelar</a>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


