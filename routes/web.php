<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Simple preview route for admin dashboard (moved into auth group below)

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Admin preview route (protected with telkom.admin middleware)
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('telkom.admin');

    // Admin sidebar routes
    Route::middleware('telkom.admin')->prefix('admin')->group(function () {
        Route::get('/magang', function () {
            return view('admin.magang', ['title' => 'User Account Magang']);
        })->name('admin.magang');

        Route::get('/attendance', function () {
            return view('admin.attendance', ['title' => 'Lihat Absensi']);
        })->name('admin.attendance');

        Route::get('/activity-report', function () {
            return view('admin.activity-report', ['title' => 'Laporan Aktivitas']);
        })->name('admin.activity-report');
    });
});
