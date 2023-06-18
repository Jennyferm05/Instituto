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
            color: #0c0b0b;
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div id="j" class="card">
                        <div class="card-header">
                            <h4><strong>Registrar Materia</strong></h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('nueva_materia') }}" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input class="form-control" type="text" name="nombre" required>
                                </div>

                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <input class="form-control" type="text" name="descripcion" required>
                                </div>

                                <label for="docente_id">Selecciona Docente Id:</label>
                                <select class="form-control" name="docente_id" id="docente_id">
                                    <option value="">Seleccionar docente</option>
                                    @foreach ($docentes as $docente)
                                            <option value="{{ $docente->id }}">{{ $docente->persona->primer_nombre}}</option>

                                    @endforeach



                                </select><br>

                                <button class="btn btn-primary" id="mi-boton" type="submit">Agregar</button>
                                <a href="{{ route('materias') }}" class="btn btn-danger btn-xl">Cancelar</a>
                            </form>
                        </div>
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
@endsection
@section('scripts')
@show
