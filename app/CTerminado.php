<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTerminado extends Model
{
    protected $table = 'c_terminados';
    protected $fillable = [
        'id', 'user_id', 'curso_id', 't_terminado_id'
    ];
}
