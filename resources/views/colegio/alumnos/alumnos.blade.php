@extends('layouts.app')
@php
    $pageTitle = 'Alumnos';
@endphp
@section('css')
@show

@section('content')
    <main class="py-4"></main>

    @if (session('mensaje'))
        <div class="alert alert-success">{{ session('mensaje') }}</div>
    @endif
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
                                    @can('getalumnoadd')
                                        <th style="width: 200px;"><a href="{{ route('colegio.alumno.add') }}"
                                                class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a></th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->id }}</td>
                                        @foreach ($personas as $persona)
                                            @if ($alumno->persona_id == $persona->id)
                                                <td>{{ $alumno->persona_id }} {{ $persona->primer_nombre }} {{ $persona->primer_apellido }}</td>
                                            @break
                                        @endif
                                    @endforeach
                                    @foreach ($grados as $grado)
                                        @if ($alumno->grado_id == $grado->id)
                                            <td>{{ $alumno->grado_id }} {{ $grado->nombre }}</td>
                                        @break
                                    @endif
                                @endforeach
                                @foreach ($jornadas as $jornada)
                                    @if ($alumno->jornada_id == $jornada->id)
                                        <td>{{ $alumno->jornada_id }} {{ $jornada->nombre }}</td>
                                    @break
                                @endif
                            @endforeach

                            @can('getalumnoadd')
                                <form action="{{ route('colegio.alumno.delete', $alumno->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <td><a href="{{ route('colegio.alumno.edit', $alumno->id) }}"
                                            class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>


                                        <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="return confirm('¿Estás seguro de que deseas eliminar esta persona?')"><i
                                                class="fas fa-backspace"></i></button>
                                </form>
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
