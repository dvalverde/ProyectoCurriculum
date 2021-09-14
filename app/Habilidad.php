<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
  protected $fillable = ['id','descripcion','dominio','id_usuario'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'habilidadx_curricula', 'id_habilidad', 'id_curriculum');
  }
  public function tags()
  {
      return $this->belongsToMany(Tag::class, 'habilidadx_tags', 'id_habilidad','id_tag');
  }
}
