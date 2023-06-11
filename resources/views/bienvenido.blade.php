@extends('layouts.app')
@php
    $pageTitle = 'Bienvenido';
@endphp
@section('css')
    <style>
        .jumbotron {
            background-image: url('{{ asset('img/bienvenido.png') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            height: 600px;
            margin-bottom: 0%;
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron">
        <div class="container">

            <h1 class="display-4 dt-center">WELCOME</h1>
            <p>INSTITUTO</p>
        </div>
    </div>
    <footer class="footer">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="{{ route('login') }}">EscuadronSuicida.com</a>
        </div>
    </footer>
@endsection
