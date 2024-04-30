<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'producto'])->name('Producto.productos');
Route::get('/productos/crearProductos', [ProductoController::class, 'crearProducto'])->name('Producto.crearProductos');
Route::post('/productos/guardarProductos', [ProductoController::class, 'guardarPoducto'])->name('Producto.guardarProductos');