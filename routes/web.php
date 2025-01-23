<?php

use App\Http\Controllers\FuncionesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//una ruta por cada metodo del controlador

Route::get('/productos',[FuncionesController::class, 'pedidosUsuario2']);
Route::get('/informacion',[FuncionesController::class, 'informacionPedidos']);
Route::get('/rango',[FuncionesController::class, 'pedidosRango']);
Route::get('/letraR',[FuncionesController::class, 'usuariosLetraR']);
Route::get('/total',[FuncionesController::class, 'totalPedidosUsuario5']);
Route::get('/ordenados',[FuncionesController::class, 'pedidosUsuariosOrdenados']);
Route::get('/campoTotal',[FuncionesController::class, 'campoTotal']);
Route::get('/economico',[FuncionesController::class, 'pedidoEconomico']);
Route::get('/pedidosByUser',[FuncionesController::class, 'pedidosUsuario']);