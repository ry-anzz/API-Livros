<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblLivro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomeLivro',
        'generoLivro',
        'anoLivro',
    ];
}
