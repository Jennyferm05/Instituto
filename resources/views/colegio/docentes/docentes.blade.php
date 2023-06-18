@extends('layouts.app')
@php
    $pageTitle = 'Docentes';
@endphp
@section('css')
@show

@section('content')
    <div id="docentes" class="background">
        <main class="py-4"></main>
        @if (session('mensaje'))
            <div class="alert alert-success">{{ session('mensaje') }}</div>
        @endif
        @if (session('agregado'))
            <div class="alert alert-success">{{ session('agregado') }}</div>
        @endif

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div id="borde_docente" class="card">
                        <div id="docentet" class="card-header">Docentes</div>

                        <div class="card-body">
                            <table id="datatable" class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Persona Id</th>
                                        <th>Nombres</th>
                                        <th>Jornada</th>
                                        <th><a href="{{ route('getdocenteodd') }}" class="btn btn-success btn-sm"><i
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
                                        @foreach ($jornadas as $jornada)
                                            @if ($docente->jornada_id == $jornada->id)
                                                <td>{{ $docente->jornada_id }} {{ $jornada->nombre }}</td>
                                            @break
                                        @endif
                                    @endforeach




                                    @can('getdocenteodd')
                                        <form action="{{ route('getdocentedelete', $docente->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td><a href="{{ route('getdocenteedot', $docente->id) }}"
                                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-sm" type="submit"
                                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este docente?')"><i
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
</div>

@section('scripts')
@show

@section('dataTables')
@show
@endsection
