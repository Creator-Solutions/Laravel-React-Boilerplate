<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('api')->group(function () {
    Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
