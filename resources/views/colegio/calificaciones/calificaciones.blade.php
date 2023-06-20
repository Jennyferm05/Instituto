@extends('layouts.app')
@php
    $pageTitle = 'Calificaciones';
@endphp

@section('content')
    <main class="py-4"></main>
    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Calificaciones</div>

                <div class="card-body">

                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Alumno Id</th>
                                <th>Docente Id</th>
                                <th>Actividad Id</th>
                                <th>Promedio</th>
                                <th style="width: 200px;"><a href="{{ route('calificaciones.create') }}"
                                    class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calificaciones as $calificacion)
                                <tr>
                                    <td>{{ $calificacion->id }}</td>
                                    <td>{{ $calificacion->alumno_id }}</td>
                                    <td>{{ $calificacion->docente_id }}</td>
                                    <td>{{ $calificacion->actividad_id }}</td>
                                    <td>{{ $calificacion->promedio }}</td>
                                    <td>botones-editar-eliminar</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@section('scripts')


@show
@endsection
