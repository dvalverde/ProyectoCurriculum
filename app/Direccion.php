<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = ['id_usuario','pais','provincia','ciudad','direccion_exacta'];
}
