<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;

class Jogo extends Model
{

    protected $fillable = [
        'nome',
        'categoria',
        'ano_criacao',
        'valor',
    ];
}
