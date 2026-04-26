<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\TransactionController;

Route::get('/', function () {
    return view('home');
});


// Halaman Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Group Admin (Pakai middleware 'auth' dan 'admin' yang kamu buat tadi)
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/games', [GameController::class, 'index'])->name('admin.games.index');
    Route::post('/games', [GameController::class, 'store'])->name('admin.games.store');
    Route::put('/games/{id}', [GameController::class, 'update'])->name('admin.games.update');
    Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('admin.games.destroy');
    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.transactions.index'); 
});
