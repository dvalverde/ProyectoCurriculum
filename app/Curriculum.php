<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $fillable = ['id','id_usuario','resume_perfil'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'id_usuario');
    }

    public function emails()
    {
        return $this->belongsToMany(Email::class, 'emailx_curricula', 'id_curriculum', 'direccion_correo');
    }
    public function telefonos()
    {
        return $this->belongsToMany(Telefono::class, 'telefonox_curricula', 'id_curriculum', 'numero');
    }
    public function redesSociales()
    {
        return $this->belongsToMany(RedesSociales::class, 'redes_socialesx_curricula', 'id_curriculum', 'nombre_red');
    }
    public function referencias()
    {
        return $this->belongsToMany(Referencia::class, 'referenciax_curricula', 'id_curriculum', 'id_referencia');
    }
    public function experiencias()
    {
        return $this->belongsToMany(Experiencia::class, 'experienciax_curricula', 'id_curriculum', 'id_experiencia');
    }
    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'habilidadx_curricula', 'id_curriculum', 'id_habilidad');
    }
}
