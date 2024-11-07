<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Models\Categoria;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);
Route::resource('categorias', CategoriaController::class);


/**
 * Route::resource('categorias', CategoriaController::class)->parameters([
 *   'categorias' => 'id_categoria',
 * ]);
 * 
 */


 // Define las rutas resource excepto 'edit' y 'update'
//Route::resource('categorias', CategoriaController::class)->except(['edit', 'update']);

// Define las rutas 'edit' y 'update' manualmente con 'id_categoria' como parámetro
//Route::get('categorias/{id_categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
//Route::put('categorias/{id_categoria}', [CategoriaController::class, 'update'])->name('categorias.update');


