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
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Grupos', [App\Http\Controllers\GrupoController::class, 'grupos'])->name('grupos');


Route::get('/Alumnos', [App\Http\Controllers\AlumnoController::class, 'alumnos'])->name('alumnos');
Route::get('/Alumnos/Nuevo', [App\Http\Controllers\GrupoController::class, 'grupo_id'])->name('colegio.alumno.add');
Route::get('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'getalumnoadd'])->name('colegio.alumno.add');
Route::post('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'postalumnoadd'])->name('colegio.alumno.add');
Route::get('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnoedit'])->name('colegio.alumno.edit');
Route::post('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'postalumnoedit'])->name('colegio.alumno.edit');
Route::get('/Alumnos/delete/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnodelete'])->name('colegio.alumno.delete');



Route::get('/Docentes', [App\Http\Controllers\ColegioController::class, 'docentes'])->name('docentes');
Route::get('/Materias', [App\Http\Controllers\ColegioController::class, 'materias'])->name('materias');
Route::get('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'calificaciones'])->name('calificaciones');
Route::get('/Horarios', [App\Http\Controllers\ColegioController::class, 'horarios'])->name('horarios');
Route::get('/Usuarios', [App\Http\Controllers\ColegioController::class, 'usuarios'])->name('usuarios');




