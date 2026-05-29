<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login.post');
    Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register.post');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Routes
    Route::middleware('role.admin')->prefix('admin')->name('dashboard.admin')->group(function () {
        Route::get('/', [DashboardController::class, 'adminDashboard']);
    });

    // Customer Routes
    Route::middleware('role.customer')->prefix('customer')->name('dashboard.customer')->group(function () {
        Route::get('/', [DashboardController::class, 'customerDashboard']);
    });

    // Teknisi Routes
    Route::middleware('role.teknisi')->prefix('teknisi')->name('dashboard.teknisi')->group(function () {
        Route::get('/', [DashboardController::class, 'teknisiDashboard']);
    });
});

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('auth.login');
});