@extends('layouts.app')
@php
    $pageTitle = 'Usuarios';
@endphp

@section('content')
    <div id="tables" class="card">
        <div class="card-header">
            <h3 class="card-title">Usuarios<span> && </span>Permisos</h3>
        </div>
        <!-- /.card-header -->
        <div id="tables" class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subnombre</th>
                        <th>Usuario_id</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th><a href="" class="btn btn-info btn-sm"><i
                                    class="fas fa-edit"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->subnombre }}</td>
                            <td>{{ $user->persona_id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td></td>
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
