<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('bienvenido');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:home')->name('home');

//Ruta de grupos: solo vista
Route::get('/Grupos', [App\Http\Controllers\GrupoController::class, 'grupos'])->middleware('can:grupos')->name('grupos');


//Rutas de alumnos: vista, agregar, editar y eliminar
Route::get('/Alumnos', [App\Http\Controllers\AlumnoController::class, 'alumnos'])->middleware('can:alumnos')->name('alumnos');
Route::get('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'getalumnoadd'])->middleware('can:getalumnoadd')->name('colegio.alumno.add');
Route::post('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'postalumnoadd'])->middleware('can:postalumnoadd')->name('colegio.alumno.add');
Route::get('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnoedit'])->middleware('can:colegio.alumno.edit')->name('colegio.alumno.edit');
Route::post('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'postalumnoedit'])->middleware('can:colegio.alumno')->name('colegio.alumno.edit');
Route::get('/Alumnos/delete/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnodelete'])->middleware('can:colegio.alumno.delete')->name('colegio.alumno.delete');



Route::get('/Docentes', [App\Http\Controllers\ColegioController::class, 'docentes'])->middleware('can:docentes')->name('docentes');
Route::get('/Materias', [App\Http\Controllers\ColegioController::class, 'materias'])->middleware('can:materias')->name('materias');
Route::get('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'calificaciones'])->middleware('can:calificaciones')->name('calificaciones');
Route::get('/Horarios', [App\Http\Controllers\ColegioController::class, 'horarios'])->middleware('can:horarios')->name('horarios');


//Rutas de perfiles y permisos: vista, agregar, editar y eliminar
Route::get('/Perfiles/Usuarios', [App\Http\Controllers\PersonaController::class, 'usuarios'])->middleware('can:usuarios')->name('usuarios');
Route::get('/Perfiles/Personas', [App\Http\Controllers\PersonaController::class, 'personas'])->middleware('can:personas')->name('personas');



