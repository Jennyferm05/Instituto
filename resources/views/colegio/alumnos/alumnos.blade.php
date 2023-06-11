@extends('layouts.app')
@php
    $pageTitle = 'Alumnos';
@endphp
@section('css')
@show

@section('content')
    <main class="py-4"></main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alumnos</div>

                    <div class="card-body">
                        <table id="datatable" class="table table-sm table-striped">
                            <thead class="bg-danger text-white">
                                <tr>
                                    <th>Id</th>
                                    <th>Persona Id</th>
                                    <th>Grado Id</th>
                                    <th>Jornada</th>
                                    <th><a href="{{ route('colegio.alumno.add') }}" class="btn btn-success btn-sm"><i
                                                class="fas fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->id }}</td>
                                        <td>{{ $alumno->persona_id }}</td>
                                        <td>{{ $alumno->grado_id }}</td>
                                        <td>{{ $alumno->jornada_id }}</td>
                                        <td><a href="{{ route('colegio.alumno.edit', $alumno->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" id="prueba"
                                                value="{{ $alumno->id }}"><i class="fas fa-backspace"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
@show

@section('dataTables')
@show
@endsection
