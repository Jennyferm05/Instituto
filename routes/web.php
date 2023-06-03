<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Grupos', [App\Http\Controllers\ColegioController::class, 'grupos'])->name('grupos');
Route::get('/Alumnos', [App\Http\Controllers\ColegioController::class, 'alumnos'])->name('alumnos');
Route::get('/Docentes', [App\Http\Controllers\ColegioController::class, 'docentes'])->name('docentes');
Route::get('/Materias', [App\Http\Controllers\ColegioController::class, 'materias'])->name('materias');
Route::get('/Calificaciones', [App\Http\Controllers\ColegioController::class, 'calificaciones'])->name('calificaciones');
Route::get('/Horarios', [App\Http\Controllers\ColegioController::class, 'horarios'])->name('horarios');
Route::get('/Usuarios', [App\Http\Controllers\ColegioController::class, 'usuarios'])->name('usuarios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
