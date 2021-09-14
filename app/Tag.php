<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable = ['id','tag'];
  public function experiencias()
  {
      return $this->belongsToMany(Experiencia::class, 'experienciax_tags','id_tag', 'id_experiencia');
  }
  public function habilidades()
  {
      return $this->belongsToMany(Habilidad::class, 'habilidadx_tags','id_tag', 'id_habilidad');
  }
}
