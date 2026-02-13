<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Exibe a página de login.
    */
    public function login() 
    {
        return view('login');
    }

    /**
     * Exibe a página de registro.
    */
    public function register() 
    {
        return view('register');
    }
}