<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnergeticasController;

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

Route::get('/mostrar',[EnergeticasController::class,'mostrar']);
Route::get('/mostrarUser',[EnergeticasController::class,'mostrarUser']);
Route::get('/crear',[EnergeticasController::class,'crear']);
Route::post('/crear',[EnergeticasController::class,'crearPost']);
Route::get('/crearUser',[EnergeticasController::class,'crearUser']);
Route::post('/crearUser',[EnergeticasController::class,'crearPostUser']);
Route::delete('/eliminar/{id}',[EnergeticasController::class,'eliminar']);
Route::delete('/eliminarUser/{id}',[EnergeticasController::class,'eliminarUser']);
Route::get('/modificar/{id}',[EnergeticasController::class,'modificar']);
Route::put('/modificar',[EnergeticasController::class,'modificarPut']);
Route::get('/modificarUser/{id}',[EnergeticasController::class,'modificarUser']);
Route::put('/modificarUser',[EnergeticasController::class,'modificarPutUser']);


