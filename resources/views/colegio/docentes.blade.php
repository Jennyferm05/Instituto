@extends('layouts.app')
@php
    $pageTitle = 'Docentes';
@endphp
@section('css')
@show

@section('content')
    <main class="py-4"></main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Docentes</div>

                    <div class="card-body">
                        <table id="datatable" class="table table-sm table-striped">
                            <thead class="bg-danger text-white">
                                <tr>
                                    <th>Id</th>
                                    <th>Persona Id</th>
                                    <th>Grado Id</th>
                                    <th>Jornada</th>
                                    <th><a href="{{ route('colegio.alumno.odd') }}" class="btn btn-success btn-sm"><i
                                                class="fas fa-plus"></i></a></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($docentes as $docente)
                                    <tr>
                                        <td>{{ $docente->id }}</td>
                                        <td>{{ $docente->persona_id }}</td>
                                        @foreach ($personas as $persona)
                                            @if ($docente->persona_id == $persona->id)
                                                <td>{{ $persona->primer_nombre }} {{ $persona->primer_apellido }}</td>
                                            @break
                                        @endif
                                    @endforeach
                                    <td>{{ $docente->grado_id }}</td>
                                    <td>{{ $docente->jornada_id }}</td>

                                    @can('getdocenteodd')
                                        <td><a href="{{ route('colegio.alumno.edot', $docente->id) }}"
                                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" id="prueba"
                                                value="{{ $docente->id }}"><i class="fas fa-backspace"></i></button>
                                        </td>
                                    @endcan
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