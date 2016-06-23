<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable=[
        'nome',
        'telefone'
    ];
}
