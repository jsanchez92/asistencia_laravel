<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CentroEducativo_Controler;
use App\http\Controllers\MatriculaController;
use App\http\Controllers\Directores;
use App\http\Controllers\Director_Centro_Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/centros',CentroEducativo_Controler::class);
Route::resource('/matricula',MatriculaController::class);
Route::resource('/directores',Directores::class);
Route::resource('/asignaciones',Director_Centro_Controller::class);