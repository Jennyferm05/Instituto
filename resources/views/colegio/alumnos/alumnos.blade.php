@extends('layouts.app')
@php
    $pageTitle = 'Alumnos';
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
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Grupo_Id</th>
                        <th><a href="{{ route('colegio.alumno.add') }}" class="btn btn-success btn-sm"><i
                                    class="fas fa-plus"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->apellido }}</td>
                            <td>{{ $alumno->edad }}</td>
                            <td>{{ $alumno->grupo_id }}</td>
                            <td><a href="{{ route('colegio.alumno.edit', $alumno->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-danger btn-sm" id="prueba" value="{{ $alumno->id }}"><i class="fas fa-backspace"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>


            <script>
                $(document).ready(function () {
                    $('#datatable').DataTable({
                        "responsive": true, "lengthChange": false, "autoWidth": false,
                        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                      }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

                });</script>
                <script>
                    $(document).on('click','#prueba',function(){
                        var id = $(this).val()
                        Swal.fire({
                            title: 'Esta seguro?',
                            text: "Esta acción no se puede revertir!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, borralo!',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Borrado!',
                                    'El registro ha sido borrado.',
                                    'success'
                                    )
                                    $(location).attr('href','{{ url('alumno/delete') }}/'+id);
                            }
                            })
                        });
                        </script>
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
