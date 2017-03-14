<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    protected $table = 'modulos';
    protected $fillable = [
        'id', 'nombre', 'n_modulo','n_cursos', 'img_url', 'curso_id',
    ];
}
