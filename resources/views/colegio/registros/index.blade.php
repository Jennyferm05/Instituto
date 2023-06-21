@extends('layouts.app')
@php
    $pageTitle = 'Materias';
@endphp
@section('css')
    <style>
        .custom {
            background-image: url('../img/7502.png');
            background-size: cover;
            background-position: center;
            color: #110404;
            height: 700px;
        }

        #j {
            background-color: transparent;
            border: 1px solid white;
            border-radius: 3%;
            padding-bottom: 5%;
        }

        .container {
            position: relative;
        }

        .bottom-right {
            position: absolute;
            bottom: 0;
            right: 0;
            margin-bottom: 10px;
            margin-right: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="custom">
        <main class="py-4"></main>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Materias</div>

                        <div class="card-body">
                            <table id="datatable" class="table table-sm table-striped">
                                <thead class="text-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Docente Id</th>

                                        <th><a href="{{ route('nueva_materia') }}" class="btn btn-success btn-sm"><i
                                                    class="fas fa-plus"></i></a></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                        <tr>
                                            <td>{{ $materia->id }}</td>
                                            <td>{{ $materia->nombre }}</td>
                                            <td>{{ $materia->descripcion }}</td>
                                            @foreach ($docentes as $docente)
                                                @foreach ($personas as $persona)
                                                    @if ($materia->docente_id == $docente->id)
                                                        <td>{{ $docente->id }} {{ $docente->persona->primer_nombre }}
                                                            {{ $docente->persona->primer_apellido }}</td>
                                                    @break
                                                @endif
                                            @endforeach
                                        @endforeach


                                        <td><a href="" class="btn btn-info btn-sm"><i
                                                    class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger btn-sm" id="prueba" value=""><i
                                                    class="fas fa-backspace"></i></button>
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
    <div class="bottom-right">
        <p><a
                href="https://www.freepik.es/vector-gratis/concepto-geopraphy-conjunto-leccion-escuela-dibujos-animados-retro_2873404.htm#query=materias%20escolares&position=0&from_view=search&track=ais">Imagen
                de macrovector</a> en Freepik</p>
    </div>
</div>


@section('scripts')
@show

@section('dataTables')
@show
@endsection
