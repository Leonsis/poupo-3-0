<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        /*Forma de pegar os dados do formulário              
        $name = $request->input('name');
        $email = $request->input('email');
        ...
        */

        $data = $request->validate([
            'tipo_conta'   => 'required|string', // 1 -> admin, 2 -> pessoal, 3 -> empresarial
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|string|min:6',
            'dat_nasci' => 'required|date',
            'tel'      => 'required|string|max:20'
        ]);

        User::create($data);

        return response()->json($request->all()); // Para depuração, retorna os dados recebidos como JSON
        
    }
}