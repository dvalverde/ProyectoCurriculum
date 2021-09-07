<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
  protected $fillable = ['id','descripcion','dominio','id_usuario'];
}
