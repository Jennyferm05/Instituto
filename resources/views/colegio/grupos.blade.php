@extends('layouts.app')
@php
    $pageTitle = 'Grupos';
@endphp

@section('content')
    <main class="py-4"></main>
    <div id="tables" class="card">
        <div class="card-header">
            <h3 class="card-title">Grupos</h3>
        </div>
        <!-- /.card-header -->
        <div id="tables" class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Nivel Educativo</th>
                        <th>Cordinador De Grado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grupos as $grupo)
                        <tr>
                            <td>{{ $grupo->id }}</td>
                            <td>{{ $grupo->nombre }}</td>
                            <td>{{ $grupo->nivel }}</td>
                            <td>{{ $grupo->coordinador_grado }}</td>
                        </tr>
                    @endforeach
                </tbody>


            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
