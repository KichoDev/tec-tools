<?php

use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/technologies', [TechnologyController::class, 'index'])->name('technologies.index');
