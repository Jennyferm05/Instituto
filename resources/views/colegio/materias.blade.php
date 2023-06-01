@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
      <div class="col">
        <h1><strong>Registrar Materia</strong></h1>
        <h5>Grupo</h5>
        <select class="form-select" aria-label="Default select example">
          <option selected>Seleccionar Grupo</option>
          <option value="1">Primero A</option>
          <option value="2">Primero B</option>
          <option value="3">Primero C</option>
          <option value="4">Segundo A</option>
          <option value="5">Segundo B</option>
          <option value="6">Segundo C</option>
        </select><br>
        <h5>Nombre</h5>
        <input type="text" class="form-control" id="nombre_materia" placeholder="Nombre"><br>
        <button type="button" class="btn btn-primary">
          Guardar
        </button>
      </div>
    </div>
  </div>
@endsection
