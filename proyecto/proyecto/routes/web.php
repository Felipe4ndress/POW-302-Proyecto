<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\PropuestasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[EstudiantesController::class,'create']); 
Route::get('/administrador',[EstudiantesController::class,'index']); 
Route::get('/PropuestaEstudiante',[PropuestasController::class,'index']);
Route::get('/administradorProfesores',[ProfesoresController::class,'index']);
Route::get('/PropuestaProfesor',[PropuestasController::class,'create']);
Route::get('/login',[EstudiantesController::class,'show']);


Route::resource('Estudiantes',EstudiantesController::class);
Route::resource('Profesores',ProfesoresController::class);
Route::resource('Propuestas',PropuestasController::class);
