<?php

use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/technologies', [TechnologyController::class, 'index'])->name('technologies.index');
Route::get('/technologies/create', [TechnologyController::class, 'create'])->name('technologies.create');
Route::post('/technologies/store', [TechnologyController::class, 'store'])->name('technologies.store');
