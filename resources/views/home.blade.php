@extends('layouts.app')
@php
    $pageTitle = 'Inicio';
@endphp

@section('content')
    <div id="home" class="jumbotron">
        <div class="container">

            <h1 class="display-4">WELCOME</h1>
            <p class="lead">Que Deseas Hacer?</p>
        </div>

    </div>
    <br>
    @can('usuarios')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/students.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Registrar Alumnos</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/imagendos.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Administrar Grupos</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/boletines.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Boletines</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/materias.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Registrar Materias</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/docentes.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Administrar Docentes</strong></p>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/grafico.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Gráficos De Crecimiento</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/horario.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Horarios De Clase</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/calificaciones.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Registrar Calificaciones</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/md.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Materias De Docentes</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 12rem;">
                        <img src="{{ asset('img/imprimir.png') }}" class="card-img-top" alt="..." height="220">
                        <div class="card-body">
                            <p class="text-center"><strong>Imprimir Horarios</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: #979A9A;">
                © 2023 Copyright:
                <a class="text-dark" href="{{ route('home') }}">EscuadronSuicida.com</a>
            </div>
        </footer>
    @endcan
@endsection
