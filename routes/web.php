<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

// Redirigir la raíz del sitio al listado de vehículos
Route::get('/', function () {
    return redirect()->route('vehiculos.index');
});

// Crear todas las rutas del CRUD para Vehiculos
Route::resource('vehiculos', VehiculoController::class);