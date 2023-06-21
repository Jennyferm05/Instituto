@extends('layouts.app')
@php
    $pageTitle = 'Bienvenido';
@endphp
@section('css')
    <style>
        .jumbotron {
            background-image: url('{{ asset('img/bienvenido.png') }}');
            background-size: 1518px 700px;
            background-position: center;
            color: #040202;
            height: 700px;
            width: 1518px;
            margin-bottom: 0%;
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron">
        <div class="container">
        </div>
    </div>
@endsection
