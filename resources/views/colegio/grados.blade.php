@extends('layouts.app')
@php
    $pageTitle = 'Grupos';
@endphp

@section('content')
    <main class="py-4"></main>
    <div id="tables" class="card">
        <div class="card-header">
            <h3 class="card-title">Grados</h3>
        </div>
        <!-- /.card-header -->
        <div id="tables" class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($grados as $grado)
                        <tr>
                            <td>{{ $grado->id }}</td>
                            <td>{{ $grado->nombre }}</td>
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
