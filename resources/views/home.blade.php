@extends('layouts.app')


@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">WELCOME ADMIN</h1>
      <p class="lead">Que Deseas Hacer?</p>
    </div>
  </div><br>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset('img/students.png') }}" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Registrar Alumnos</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://images6.alphacoders.com/130/1308016.jpg" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Administrar Grupos</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://cdn.leonardo.ai/users/33ad0cac-03ce-405a-892e-46b2abc3110e/generations/a14d5b31-0517-4eac-b74f-422bd37c9def/Leonardo_Diffusion_an_example_of_a_companys_sophisticated_repo_0.jpg" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Boletines</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://cdn.leonardo.ai/users/71823abd-28bb-4526-9016-40f0c84d0847/generations/d416d820-cc2c-493d-9a6d-5f6e824642a4/variations/Default_Create_a_logo_for_a_site_called_Gameteca_a_site_aimed_3_d416d820-cc2c-493d-9a6d-5f6e824642a4_1.jpg" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Registrar Materias</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://cdn.leonardo.ai/users/42f9429d-850a-4280-aacc-6f7d1643c99b/generations/c21b0ddb-d91e-43ee-b6b2-9e61e631e6e4/variations/Default_A_closeup_of_a_Vietnamese_old_mans_face_illuminated_by_0_c21b0ddb-d91e-43ee-b6b2-9e61e631e6e4_1.jpg" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Administrar Docentes</strong></p>
          </div>
        </div>
      </div>
    </div><br>
    <div class="row">
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset('img/grafico.png') }}" class="card-img-top" alt="..." height="200">
          <div class="card-body">
            <p class="text-center"><strong>Gráficos De Crecimiento</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset('img/horario.png') }}" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Horarios De Clase</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset('img/calificaciones.png') }}" class="card-img-top" alt="..." height="200">
          <div class="card-body">
            <p class="text-center"><strong>Registrar Calificaciones</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://contactomaestro.colombiaaprende.edu.co/sites/default/files/maestrospublic/styles/interna_850x260/public/2020-06/btn_plataforma_1.jpg?h=aeae0952&itok=ca5hc4NL" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Materias De Docentes</strong></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="https://cdn.icon-icons.com/icons2/1090/PNG/512/printer_78349.png" class="card-img-top" alt="..." height="220">
          <div class="card-body">
            <p class="text-center"><strong>Imprimir Horarios</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>
  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="">EscuadronSuicida.com</a>
    </div>
  </footer>
@endsection
