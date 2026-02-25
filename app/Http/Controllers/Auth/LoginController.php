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

    /*
     * Faz a autenticação do usuário e redireciona para a página de dashboard.
    */
    public function authenticate (Request $request) 
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {            
            $request->session()->regenerate(); // Regenera a sessão para evitar ataques de fixaçãi de sessão.

            return redirect()->intended('/dashboard');
        }

        /* Criar umas estrutura que informe que o usuario não foi autenticado e o porque*/
    }


    /*
     * Function para deslogar da seção.
    */
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate(); // Invalida a sessão atual.
        $request->session()->regenerateToken(); //Regenera o token CSRF para evitar ataques de falsificação de solicitação entre sites (CSRF).]
        
        return redirect('/login');
    }
}