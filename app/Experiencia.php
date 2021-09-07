<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
  protected $fillable = ['id','descripcion','duracion','fecha_nacimiento','tipo','id_usuario'];
}
