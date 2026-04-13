<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/index.html');
});

// Admin routes - these would typically require authentication middleware
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/users', [DashboardController::class, 'users']);
});
