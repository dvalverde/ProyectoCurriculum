<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['id','login','password','email_login','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nacimiento'];

    public function direccion()
    {
        return $this->hasOne(Direccion::class,'id_usuario');
    }
    public function curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }
    public function emails()
    {
        return $this->hasMany(Email::class,'id_usuario');
    }
    public function telefonos()
    {
        return $this->hasMany(Telefono::class,'id_usuario');
    }
    public function redesSociales()
    {
        return $this->hasMany(RedesSociales::class,'id_usuario');
    }
    public function referencias()
    {
        return $this->hasMany(Referencia::class,'id_usuario');
    }
    public function experiencias()
    {
        return $this->hasMany(Experiencia::class,'id_usuario');
    }
    public function habilidades()
    {
        return $this->hasMany(Habilidad::class,'id_usuario');
    }
}
