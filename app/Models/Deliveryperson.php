<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveryperson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'email',
        'password',
        'ratings',
    ];

    protected $hidden = ['password'];
}
