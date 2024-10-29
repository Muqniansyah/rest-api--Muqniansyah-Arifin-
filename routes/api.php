<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products', ProductController::class);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
// route logout agar bisa remove token must include middleware auth:sanctum