<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GruposModel extends Model
{
    protected $table ="tb_grupos";
    protected $primarykey="id";
    protected $fillable=[
        'clave'
        ,'nombre'
        
    ];
}
