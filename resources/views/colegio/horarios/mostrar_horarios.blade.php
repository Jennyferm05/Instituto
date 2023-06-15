@extends('layouts.app')
@php
    $pageTitle = 'Horarios';
@endphp
@section('css')
@show

@section('content')
    <main class="py-4"></main>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="{{ route('filtro') }}" method="GET">
                    <div class="form-group">
                        <label for="grado_id">Filtrar Id Grado:</label>
                        <select class="form-control" name="grado_id" id="grado_id">
                            @foreach ($grados as $grado)
                            <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                        @endforeach

                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </form>
                <table id="datatable" class="table table-sm table-striped">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th>Id</th>
                            <th>Dia de la semana</th>
                            <th>Hora Inicio</th>
                            <th>Hora Fin</th>
                            <th>Materia Id</th>
                            <th>Grado Id</th>
                            @can('nuevo_horario')


                            <th><a href="{{ route('nuevo_horario') }}" class="btn btn-success btn-sm"><i
                                class="fas fa-plus"></i></a></th>
                                @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($horarios as $horario)
                            <tr>
                                <td>{{ $horario->id }}</td>
                                <td>{{ $horario->dia_de_la_semana }}</td>
                                <td>{{ $horario->hora_inicio }}</td>
                                <td>{{ $horario->hora_fin }}</td>
                                @foreach ($materias as $materia)
                                            @if ($horario->materia_id == $materia->id)
                                                <td>{{ $materia->id }} {{ $materia->nombre }}</td>
                                            @break
                                        @endif
                                    @endforeach
                                    @foreach ($grados as $grado)
                                    @if ($horario->grado_id == $grado->id)
                                        <td>{{ $grado->id }} {{ $grado->nombre }}</td>
                                    @break
                                @endif
                            @endforeach
                            @can('nuevo_horario')
                                <td></td>
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
