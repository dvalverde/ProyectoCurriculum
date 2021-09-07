<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  protected $fillable = ['id_usuario','direccion_correo'];
}
