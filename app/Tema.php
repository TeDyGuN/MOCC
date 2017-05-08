<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'temas';
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'numero', 'url_video', 'modulo_id'
    ];
}
