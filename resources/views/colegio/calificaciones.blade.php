@extends('layouts.app')
@php
    $pageTitle = 'Calificaciones';
@endphp

@section('content')
    <main class="py-4"></main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <form>
                        <label for="grupo">Grupo:</label>
                        <select id="grupo" name="grupo">
                            <option value="grupo1">Grupo 1</option>
                            <option value="grupo2">Grupo 2</option>
                            <option value="grupo3">Grupo 3</option>
                            <!-- Agrega más opciones de grupos -->
                        </select>

                        <label for="fechaInicio">Fecha de inicio:</label>
                        <input type="date" id="fechaInicio" name="fechaInicio">

                        <label for="fechaFin">Fecha de fin:</label>
                        <input type="date" id="fechaFin" name="fechaFin">

                        <label for="actividad">Actividad:</label>
                        <select id="actividad" name="actividad">
                            <option value="actividad1">Actividad 1</option>
                            <option value="actividad2">Actividad 2</option>
                            <option value="actividad3">Actividad 3</option>
                            <!-- Agrega más opciones de actividades -->
                        </select>

                        <input type="text" id="nuevaActividad" name="nuevaActividad"
                            placeholder="Agregar nueva actividad">

                        <button type="submit">Guardar</button>
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>Estudiante</th>
                                <th>Asignatura</th>
                                <th>Calificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Estudiante 1</td>
                                <td>Matemáticas</td>
                                <td>9.5</td>
                            </tr>
                            <tr>
                                <td>Estudiante 1</td>
                                <td>Ciencias</td>
                                <td>8.7</td>
                            </tr>
                            <tr>
                                <td>Estudiante 2</td>
                                <td>Matemáticas</td>
                                <td>7.8</td>
                            </tr>
                            <tr>
                                <td>Estudiante 2</td>
                                <td>Ciencias</td>
                                <td>6.9</td>
                            </tr>
                            <!-- Agregar más filas para las demás calificaciones -->
                        </tbody>
                    </table>
                @endsection
