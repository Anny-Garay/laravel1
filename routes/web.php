<?php

use Illuminate\Support\Facades\Route;
//Llamamos a todos loscontroladores que usaremos
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AnnyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\PedidosController;
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

Route::get('/usuarios',function(){
    return "Aqui van los usuarios";
});

Route::get('/usuarios2',
    [UsuariosController::class,'listar']
);

Route::get('/productos',
    [ProductoController::class,'listar']
);

Route::get('/anny',
    [AnnyController::class,'listar']
);
Route::get('/clientes', 
    [CustomerController::class, 'listar']
);

Route::get('/oficinas', 
    [OficinaController::class, 'listar']
);

//Creamos una ruta para listar pedidos, en la parte de arriba ↑

Route::get('/pedidos', 
    [PedidosController::class, 'listar']
);