@extends('layouts.app')
@php
    $pageTitle = 'Horarios';
@endphp

@section('content')
<main class="py-4"></main>
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h1><strong>Generar Horarios</strong></h1><br>
                <select class="form-select">
                    <option selected>Seleccionar Grupo</option>
                    <option value="1">Primero A</option>
                    <option value="2">Primero B</option>
                    <option value="3">Primero C</option>
                    <option value="4">Segundo A</option>
                    <option value="5">Segundo B</option>
                    <option value="6">Segundo C</option>


                </select>
            </div>
                <div class="col-2">
                    <button type="button" class="btn btn-primary" style="margin-top: 74px;">
                        Guardar
                    </button>

                    <button type="button" class="btn btn-primary" style="margin-top: 74px;">
                        limpiar
                    </button>
                </div>
                <div class="col-9">

                <br>

                <?php
                // Definir el arreglo de días de la semana
                $dias_semana = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

                // Definir las horas disponibles
                $horas = ['08:00 a  08:45', '08:50 a  09:40', '09:40 a  10:30', '10:30 a  11:00', '11:00 a  11:50', '11:50 a  12:40', '12:40 a  1:40'];

                // Generar el horario de clases
                echo '<table>';
                echo '<tr><th>Hora</th>';

                // Encabezados de los días de la semana
                foreach ($dias_semana as $dia) {
                    echo '<th>' . $dia . '</th>';
                }

                echo '</tr>';

                // Filas del horario con las horas y las clases
                foreach ($horas as $hora) {
                    echo '<tr>';
                    echo '<td>' . $hora . '</td>';

                    foreach ($dias_semana as $dia) {
                        echo '<td><select class="form-select" aria-label="Default select example">
                                                                                                            <option selected>Seleccionar</option>
                                                                                                            <option value="1">Español</option>
                                                                                                            <option value="2">Matematicas</option>
                                                                                                            <option value="3">Sociales</option>
                                                                                                            <option value="4">Ciencia Naturales</option>
                                                                                                            <option value="5">Ingles</option>
                                                                                                            <option value="6">Quitar</option>
                                                                                                          </select></td>'; // Aquí puedes colocar la lógica para mostrar la clase correspondiente a cada hora y día
                    }

                    echo '</tr>';
                }

                echo '</table>';
                ?>
            </div>
        </div>
    </div>
@endsection
