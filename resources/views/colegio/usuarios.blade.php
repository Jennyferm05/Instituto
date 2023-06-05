@extends('layouts.app')
@php
    $pageTitle = 'Usuarios';
@endphp

@section('content')
    <main class="py-4"></main>
    <div id="tables" class="card">
        <div class="card-header">
            <h3 class="card-title">Usuarios<span> && </span>Permisos</h3>
        </div>
        <!-- /.card-header -->
        <div id="tables" class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Rol</th>
                        <th>Permisos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>All others</td>
                        <td>-</td>
                        <td>-</td>
                        <td>U</td>
                    </tr>
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
