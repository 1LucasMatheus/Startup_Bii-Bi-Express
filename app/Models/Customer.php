<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'categoria',
        'email',
        'senha',
        'pedidos',
        'avaliacoes',
    ];

    protected $hidden = [
        'senha',
    ];
}
