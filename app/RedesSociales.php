<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedesSociales extends Model
{
  protected $fillable = ['id_usuario','nombre_red','enlace_perfil','icono'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'redes_socialesx_curricula', 'nombre_red', 'id_curriculum');
  }
}
