<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', [CustomUserController::class, 'index']);

Route::get('/create', [CustomUserController::class,'create']);
Route::post('/create', [CustomUserController::class,'store']);

Route::get('/todo/login',[AuthController::class, 'login'])->name("login");
Route::post('/todo/login',[AuthController::class, 'loginPost'])->name('login.post');
Route::get('/todo/register',[AuthController::class, 'register']);
Route::put('/todo/register',[AuthController::class, 'store']);
