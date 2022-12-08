<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmpleadosController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/clientes',[CustomerController::class,'index'] )->middleware(['auth'])->name('clientes');

Route::get('/empleados',[EmpleadosController::class,'index'])->middleware(['auth'])->name('empleados');

Route::get('/ventas', function () {
    return view('ventas');
})->middleware(['auth'])->name('ventas');

Route::get('/clientes/registrar',[CustomerController::class,'registrar'])->middleware(['auth'])->name('clientes.registrar');

Route::get('/clientes/actualizar/{id}',[CustomerController::class,'actualizar'])->middleware(['auth'])->name('clientes.actualizar');

Route::post('/clientes/guardar',[CustomerController::class,'guardar'])->middleware(['auth'])->name('clientes.guardar');

Route::post('/clientes/editar/{id}',[CustomerController::class,'editar'])->middleware(['auth'])->name('clientes.editar');

require __DIR__.'/auth.php';
