<?php

use App\Http\Controllers\AdminAuthenticationdSessionController;
use App\Http\Controllers\AdminController;
use \Illuminate\Support\Facades\Route;

//Route::middleware(['guest'])->group(function () {
//
//});

Route::middleware(['guest:admin'])->group(function () {
    Route::get('register', [AdminController::class, 'create']);

    Route::post('register', [AdminController::class, 'store'])
        ->name('admin.register');

    Route::get('login', [AdminAuthenticationdSessionController::class, 'create'])
            ->name('login');

    Route::post('login', [AdminAuthenticationdSessionController::class, 'store']);
})->prefix('admin');

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/dashboard',function () {
        return view('components.backend.layout.master');
    });
})->prefix('admin');
