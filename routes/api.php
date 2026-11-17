<?php

use App\Http\Controllers\Auth\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserController;

Route::post('/login', [AdminAuthController::class, 'loginApi'])->name('login');
Route::post('/register', [AdminAuthController::class, 'register'])->name('register');

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', UserController::class);
    Route::post('logout', [AdminAuthController::class, 'logoutApi']);
});