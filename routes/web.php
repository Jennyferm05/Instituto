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

//Ruta de grados: solo vista
Route::get('/Grados', [App\Http\Controllers\GradoController::class, 'grados'])->middleware('can:grados')->name('grados');


//Rutas de alumnos: vista, agregar, editar y eliminar
Route::get('/Alumnos', [App\Http\Controllers\AlumnoController::class, 'alumnos'])->middleware('can:alumnos')->name('alumnos');
Route::get('/Alumnos',  [App\Http\Controllers\AlumnoController::class, 'mostraralumnos'])->middleware('can:mostraralumnos')->name('mostraralumnos');
Route::get('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'getalumnoadd'])->middleware('can:getalumnoadd')->name('colegio.alumno.add');
Route::post('/Alumnos/Nuevo', [App\Http\Controllers\AlumnoController::class, 'postalumnoadd'])->middleware('can:postalumnoadd')->name('colegio.alumno.add');
Route::get('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnoedit'])->middleware('can:colegio.alumno.edit')->name('colegio.alumno.edit');
Route::post('/Alumnos/Edit/{id}', [App\Http\Controllers\AlumnoController::class, 'postalumnoedit'])->middleware('can:postalumnoedit')->name('colegio.alumno.edit');
Route::get('/Alumnos/delete/{id}', [App\Http\Controllers\AlumnoController::class, 'getalumnodelete'])->middleware('can:colegio.alumno.delete')->name('colegio.alumno.delete');


//Rutas de docenstes
Route::get('/Docentes', [App\Http\Controllers\ColegioController::class, 'docentes'])->middleware('can:docentes')->name('docentes');

// RUtas de materias
Route::get('/Materias', [App\Http\Controllers\MateriaController::class, 'index'])->name('materias');
Route::get('/Materias/Nueva_Materia', [App\Http\Controllers\MateriaController::class, 'nueva_materia'])->name('nueva_materia');
Route::post('/Materias/Nueva_Materia', [App\Http\Controllers\MateriaController::class, 'postmaterias'])->name('materia_agregada');
Route::get('/Materias/Person_id', [App\Http\Controllers\ColegioController::class, 'mostrar_person_id'])->name('mostrar_person_id');

Route::get('/Jornada', [App\Http\Controllers\ColegioController::class, 'mostrar_jornada'])->name('mostrar_jornada');





Route::get('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'calificaciones'])->middleware('can:calificaciones')->name('calificaciones');






//Ruta de horarios
Route::get('/Horarios', [App\Http\Controllers\HorarioController::class, 'mostrarhorarios'])->middleware('can:mostrarhorarios')->name('mostrarhorarios');
Route::get('/Horarios/filtro', [App\Http\Controllers\HorarioController::class,'filtro'])->middleware('can:filtro')->name('filtro');
Route::get('/Horarios/materia', [App\Http\Controllers\ColegioController::class, 'mostrar_materia'])->middleware('can:mostrar_materia')->name('mostrar_materia');
Route::get('/Horarios/grado', [App\Http\Controllers\ColegioController::class, 'mostrar_grado'])->middleware('can:mostrar_grado')->name('mostrar_grado');
Route::get('/Horarios/Nuevos', [App\Http\Controllers\HorarioController::class, 'nuevo_horario'])->middleware('can:nuevo_horario')->name('nuevo_horario');
Route::post('/Horarios/Nuevo', [App\Http\Controllers\HorarioController::class, 'store'])->middleware('can:store')->name('store');


//Rutas de perfiles y permisos: vista, agregar, editar y eliminar
Route::get('/Perfiles/Usuarios', [App\Http\Controllers\PersonaController::class, 'usuarios'])->middleware('can:usuarios')->name('usuarios');
Route::get('/Perfiles/Usuarios',  [App\Http\Controllers\PersonaController::class, 'mostrarpersonas'])->middleware('can:mostrarusuarios')->name('mostrarpersonas');

Route::get('/Perfiles/Usuarios/{user}/Asignar_Rol/', [App\Http\Controllers\PersonaController::class, 'asignar_rol'])->middleware('can:asignar_rol')->name('asignar_rol');
Route::put('/Perfiles/Usuarios/{user}/Asignar_Rol/',  [App\Http\Controllers\PersonaController::class, 'rol_asignado'])->middleware('can:rol_asignado')->name('rol_asignado');

Route::get('/Perfiles/Usuarios/Nuevo',  [App\Http\Controllers\PersonaController::class, 'nuevo_usuario'])->middleware('can:crear_usuarios')->name('crear');
Route::post('/Perfiles/Usuarios/Nuevo',  [App\Http\Controllers\PersonaController::class, 'usuario_nuevo'])->middleware('can:usuario_nuevo')->name('usuario_nuevo');

Route::get('/Perfiles/Personas', [App\Http\Controllers\PersonaController::class, 'personas'])->middleware('can:personas')->name('personas');


//Rutas de docente: vista, agregar, editar y eliminar
Route::get('/Docentes', [App\Http\Controllers\DocenteController::class, 'docentes'])->middleware('can:docentes')->name('docentes');
Route::get('/Docentes',  [App\Http\Controllers\DocenteController::class, 'mostrardocentes'])->name('mostrardocentes');
Route::get('/Docentes/Nuevo', [App\Http\Controllers\DocenteController::class, 'getdocenteodd'])->name('colegio.alumno.odd');
Route::post('/Docentes/Nuevo', [App\Http\Controllers\DocenteController::class, 'postdocenteodd'])->name('colegio.alumno.odd');
Route::get('/Docentes/Edot/{id}', [App\Http\Controllers\DocenteController::class, 'getdocenteedot'])->name('colegio.alumno.edot');
Route::post('/Docentes/Edot/{id}', [App\Http\Controllers\DocenteController::class, 'postdocenteedot'])->name('colegio.alumno.edot');
Route::get('/Docentes/delete/{id}', [App\Http\Controllers\DocenteController::class, 'getdocentedelete'])->name('colegio.alumno.delete');





Route::get('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'calificaciones'])->name('calificaciones');
Route::get('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'mostrarcalificaciones'])->name('mostrarcalificaciones');
Route::get('/Calificaciones/create', [App\Http\Controllers\CalificacionController::class, 'calificaciones'])->name('calificaciones.create');
Route::post('/Calificaciones', [App\Http\Controllers\CalificacionController::class, 'store'])->name('ccolegio.calificaciones');
Route::get('/Calificaciones/{calificacion}/edit', [App\Http\Controllers\CalificacionController::class, 'edit'])->name('calificaciones.edit');
Route::put('/Calificaciones/{calificacion}', [App\Http\Controllers\CalificacionController::class, 'update'])->name('calificaciones.update');
