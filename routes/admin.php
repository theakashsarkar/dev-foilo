<?php

use App\Http\Controllers\AdminController;
use \Illuminate\Support\Facades\Route;

//Route::middleware(['guest'])->group(function () {
//
//});

Route::prefix('admin')->group(function () {
    Route::get('register', [AdminController::class, 'create']);

    Route::post('register', [AdminController::class, 'store'])
        ->name('admin.register');
})->middleware('guest');
