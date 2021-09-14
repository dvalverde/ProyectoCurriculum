<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
  protected $fillable = ['id','descripcion','duracion','fecha_nacimiento','tipo','id_usuario'];
  public function usuario()
  {
      return $this->belongsTo(Usuario::class,'id_usuario');
  }
  public function curriculums()
  {
      return $this->belongsToMany(Curriculum::class, 'experienciax_curricula',  'id_experiencia', 'id_curriculum');
  }
  public function tags()
  {
      return $this->belongsToMany(Tag::class, 'experienciax_tags', 'id_experiencia','id_tag');
  }
}
