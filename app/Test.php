<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';
    protected $fillable = [
        'id', 'nombre', 'n_preguntas', 'id_curso'
    ];
}
