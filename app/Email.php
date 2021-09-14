<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
  protected $fillable = ['id_usuario','direccion_correo'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'emailx_curricula', 'direccion_correo', 'id_curriculum');
  }
}
