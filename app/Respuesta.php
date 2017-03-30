<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';
    protected $fillable = [
        'id', 'numero', 'respuesta', 'id_pregunta', 'id_test'
    ];
}
