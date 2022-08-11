<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlumnosModel extends Model
{
    protected $table ="tb_alumnos";
    protected $id="id";
    protected $fillable=[
        'nombre'
        ,'app'
        ,'fn'
        ,'genero'
        ,'img'
        ,'id_grupo'
    ];
}
