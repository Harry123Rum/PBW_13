<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

// Routing untuk resource posts (CRUD web)
Route::resource('posts', PostController::class);

// Routing untuk API mahasiswa (CRUD API)
Route::prefix('api')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});
