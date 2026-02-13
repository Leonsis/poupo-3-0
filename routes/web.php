<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/terms-use', [PageController::class, 'termsUse'])->name('terms.use');

// Só pode acessar essa rota quem NÃO está autenticado.
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
});