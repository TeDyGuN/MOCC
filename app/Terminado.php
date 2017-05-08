<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminado extends Model
{
    protected $table = 'terminados';
    protected $fillable = [
        'id', 'user_id', 'tema_id', 'modulo_id', 'curso_id'
    ];
}
