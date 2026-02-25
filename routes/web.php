<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home'); // view
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy.policy'); // view
Route::get('/terms-use', [PageController::class, 'termsUse'])->name('terms.use'); // view

// Só pode acessar essa rota quem NÃO está autenticado.
Route::middleware('guest')->group(function () { 
    Route::get('/login', [LoginController::class, 'login'])->name('login'); // view
    Route::get('/register', [RegisterController::class, 'register'])->name('register'); // view
});

// Só pode acessar essa rota quem ESTÁ logado.
Route::middleware('auth')->group(function() {
    
    Route::get('/dashboard', function() { 
        return view('dashboard');
    })->name('dashboard');// view
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // function
});

// Rota para registo de usuario na base de dados,
Route::post('/user', [UserController::class, 'store'])->name('user.store'); // function
// Rota para autenticação do usuario.
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate'); // function