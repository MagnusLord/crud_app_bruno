<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProductController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index'])->name('orders.index');
Route::get('/clientes', [ClienteController::class, 'index'])->name('consumers.index');;