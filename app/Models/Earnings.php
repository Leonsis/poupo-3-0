<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Earnings extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_id', 
        'valor',
        'origem_receita', 
        'dat_pagamento', 
        'descricao'        
    ];

    protected $casts = [        
        'dat_pagamento' => 'date',        
    ];
}
