<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tipo_conta', // 1 -> admin, 2 -> pessoal, 3 -> empresarial
        'name',
        'email',
        'password',
        'dat_nasci',
        'tel',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'dat_nasci' => 'date',
        'password' => 'hashed', // Coloca a senha como hash automaticamente ao criar ou atualizar o usuário
    ];
}
