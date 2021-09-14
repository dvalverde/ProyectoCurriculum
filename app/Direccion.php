<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = ['id_usuario','pais','provincia','ciudad','direccion_exacta'];
    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
