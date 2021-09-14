<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referencia extends Model
{
  protected $fillable = ['id','descripcion','nombre','id_usuario','telefono_contacto','email_contacto'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'referenciax_curricula', 'id_referencia', 'id_curriculum');
  }
}
