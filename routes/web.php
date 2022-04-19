<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\OakController;
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

Route::prefix('jogos')->group(function () {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/edit={id}', [JogosController::class, 'edit'])->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');
});
Route::prefix('tecnologia')->group(function () {
    Route::get('/', [OakController::class, 'index'])->name('oak-index');
    // Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [OakController::class, 'store'])->name('oak-store');
    // Route::get('/edit={id}', [JogosController::class, 'edit'])->name('jogos-edit');
    // Route::put('/{id}', [JogosController::class, 'update'])->name('jogos-update');
    // Route::delete('/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');
});




Route::fallback(function () {
    return "Erro ao localizar rota";
});
