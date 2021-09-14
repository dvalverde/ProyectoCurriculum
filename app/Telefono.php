<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
  protected $fillable = ['id_usuario','numero'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'telefonox_curricula', 'numero', 'id_curriculum');
  }
}
