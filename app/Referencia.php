<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
  protected $fillable = ['id','descripcion','nombre','id_usuario','telefono_contacto','email_contacto'];
}
