<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTerminado extends Model
{
    protected $table = 't_terminados';
    protected $fillable = [
        'id', 'user_id', 'id_test', 'nota', 'lock', 'id_curso'
    ];
}
