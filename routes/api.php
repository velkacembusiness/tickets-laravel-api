<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login',[\App\Http\Controllers\AuthController::class,'login']);
Route::post('/register',[\App\Http\Controllers\AuthController::class,'register']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
