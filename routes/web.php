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
