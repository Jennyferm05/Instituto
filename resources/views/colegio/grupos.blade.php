@extends('layouts.app')
@php
    $pageTitle = 'Grupos';
@endphp

@section('content')
    <main class="py-4"></main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @foreach ($grupos as $grupo)
                            {{ $grupo }}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
