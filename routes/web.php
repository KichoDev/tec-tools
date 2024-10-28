<?php

use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/technologies', [TechnologyController::class, 'index'])->name('technologies.index');
Route::get('/technologies/create', [TechnologyController::class, 'create'])->name('technologies.create');
Route::post('/technologies/store', [TechnologyController::class, 'store'])->name('technologies.store');
Route::get('/technologies/{technology}', [TechnologyController::class, 'show'])->name('technologies.show');
Route::get('/technologies/{technology}/edit', [TechnologyController::class, 'edit'])->name('technologies.edit');
Route::patch('/technologies/{technology}/update', [TechnologyController::class, 'update'])->name('technologies.update');
Route::delete('/technologies/{technology}/destroy', [TechnologyController::class, 'destroy'])->name('technologies.destroy');
