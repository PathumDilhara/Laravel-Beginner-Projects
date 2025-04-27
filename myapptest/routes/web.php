<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index']); // called CarController index method

Route::get('/create', [CarController::class, 'create']);

Route::post('/create', [CarController::class, 'store']);

Route::get('/cars/{carid}', [CarController::class, 'show']);