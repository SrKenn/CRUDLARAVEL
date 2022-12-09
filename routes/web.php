<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ProductoRecetaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos',ProductoController::class);
Route::resource('recetas',RecetaController::class);
Route::resource('medicos',MedicoController::class);
Route::resource('producto-recetas',ProductoRecetaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/medicos/{id}/recetass', [App\Http\Controllers\MedicoController::class, 'recetass'])->name('recetass');