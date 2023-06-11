@extends('layouts.app')
@php
    $pageTitle = 'Calificaciones';
@endphp

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <center>
                        <form class="col-md-8">
                            <label for="grupo">Grupo:</label>
                            <select class="form-control" id="grupo" name="grupo">
                                <option value="grupo1">Grupo 1</option>
                                <option value="grupo2">Grupo 2</option>
                                <option value="grupo3">Grupo 3</option>
                                <!-- Agrega más opciones de grupos -->
                            </select>

                            <label for="fechaInicio">Fecha de inicio:</label>
                            <input class="form-control" type="date" id="fechaInicio" name="fechaInicio">

                            <label for="fechaFin">Fecha de fin:</label>
                            <input class="form-control" type="date" id="fechaFin" name="fechaFin">

                            <label for="actividad">Actividad:</label>
                            <select class="form-control" id="actividad" name="actividad">
                                <option value="actividad1">Actividad 1</option>
                                <option value="actividad2">Actividad 2</option>
                                <option value="actividad3">Actividad 3</option>
                                <!-- Agrega más opciones de actividades -->
                            </select>

                            <input class="form-control" type="text" id="nuevaActividad" name="nuevaActividad"
                                placeholder="Agregar nueva actividad">

                            <button class="form-control" type="submit">Guardar</button>
                        </form><br>
                    </center>

                    <table>
                        <thead>
                            <tr>
                                <th>Actividad Id</th>
                                <th>Alumno Id</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calificaciones as $Calificacion)
                                <tr>
                                    <td>{{ $Calificacion->id }}</td>
                                    <td>{{ $Calificacion->actividad_id }}</td>
                                    <td>{{ $Calificacion->alumno_id }}</td>
                                    <td>{{ $Calificacion->nota }}</td>
                                </tr>
                            @endforeach
                            <!-- Agregar más filas para las demás calificaciones -->
                        </tbody>
                    </table>
                @endsection
