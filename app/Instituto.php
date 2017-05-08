<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    protected $table = 'institutos';
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'direccion', 'web', 'telefono', 'email'
    ];
}
