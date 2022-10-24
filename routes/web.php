<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

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


Route::prefix('livros')->group(function () {
    Route::get('/', [LivrosController::class, 'index'])->name('livro.index');
    Route::get('/create', [LivrosController::class, 'create'])->name('livro.create');
    Route::post('/store', [LivrosController::class, 'store'])->name('livro.store');
    Route::get('/edit/{id}', [LivrosController::class, 'edit'])->name('livro.edit');
    Route::put('/update/{id}', [LivrosController::class, 'update'])->name('livro.update');
    Route::delete('/destroy/{id}', [LivrosController::class, 'destroy'])->name('livro.destroy');
});

Route::prefix('categoria')->group(function () {
    Route::get('/create', [CategoriaController::class, 'create'])->name('categoria.create');
    Route::post('/store', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::delete('/destroy/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');
});
