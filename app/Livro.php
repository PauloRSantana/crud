<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'nome', 'subtitulo', 'autor', 'ano_lancamento',
    ];
}
