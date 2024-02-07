<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\URL\URLController;

Route::middleware('auth')->name('admin.')->group(function () {
    // Dashboard Controller
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    // Category Controller
    Route::controller(URLController::class)->name('url.')->group(function () {
        Route::get('/index', 'index')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::get('/{code}', 'url')->name('short');
        Route::delete('/destroy{id}', 'destroy')->name('destroy');
    });
});
