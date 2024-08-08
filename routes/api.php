<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\UserController;


Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix'=> 'user'], function () {
        Route::get('/profile', [UserController::class, 'getProfile'])->name('profile.get');
        Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    });

    Route::group(['prefix'=> 'inventaris'], function () {
        Route::get('/all', [InventarisController::class, 'getAll'])->name('inventaris.getAll');
        Route::get('/get/{id}', [InventarisController::class, 'getById'])->name('inventaris.get');
        Route::post('/add', [InventarisController::class, 'add'])->name('inventaris.add');
        Route::post('/update/{id}', [InventarisController::class, 'update'])->name('inventaris.update');
        Route::post('/delete/{id}', [InventarisController::class, 'delete'])->name('inventaris.delete');
    });
});

