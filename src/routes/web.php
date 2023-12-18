<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'admin']);
});
Route::get('/', [ContactController::class, 'contact']);
Route::POST('/contacts/confirm', [ContactController::class, 'confirm']);

