<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
});
require __DIR__ . '/auth.php';
