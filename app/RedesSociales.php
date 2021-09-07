<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedesSociales extends Model
{
  protected $fillable = ['id_usuario','nombre_red','enlace_perfil','icono'];
}
