<?php

use App\Http\Controllers\AdminAuthenticationdSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\Authenticate;
use \Illuminate\Support\Facades\Route;

//Route::middleware(['guest'])->group(function () {
//
//});

//Route::middleware(['guest:admin'])->group(function () {
//    Route::get('register', [AdminController::class, 'create']);
//
//    Route::post('register', [AdminController::class, 'store'])
//        ->name('admin.register');
//
//    Route::get('admin/login', [AdminAuthenticationdSessionController::class, 'create'])
//            ->name('admin.login');
//
//    Route::post('login', [AdminAuthenticationdSessionController::class, 'store']);
//})->prefix('admin');

Route::prefix('admin')->group(function () {
    Route::get('register', [AdminController::class, 'create']);

    Route::post('register', [AdminController::class, 'store'])
        ->name('admin.register');

    Route::get('login', [AdminAuthenticationdSessionController::class, 'create'])
        ->name('admin.login');

    Route::post('hello/login', [AdminAuthenticationdSessionController::class, 'store'])
         ->name('submit.login');

    Route::post('logout', [AdminAuthenticationdSessionController::class, 'destroy'])
        ->name('admin.logout');
})->middleware('guest:admin');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('admin/dashboard',function () {
        return view('components.backend.index');
    })->name('admin.dashboard');
});
