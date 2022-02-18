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
Route::get('/crear',[EnergeticasController::class,'crear']);
Route::post('/crear',[EnergeticasController::class,'crearPost']);
Route::delete('/eliminar/{id}',[EnergeticasController::class,'eliminar']);
Route::get('/modificar/{id}',[EnergeticasController::class,'modificar']);
Route::put('/modificar',[EnergeticasController::class,'modificarPut']);


