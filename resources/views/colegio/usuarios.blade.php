@extends('layouts.app')
@php
    $pageTitle = 'Usuarios';
@endphp

@section('content')
<main class="py-4"></main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
