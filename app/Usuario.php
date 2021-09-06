<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['id','login','password','email_login','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nacimiento'];
}
