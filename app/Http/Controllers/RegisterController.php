<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class RegisterController extends Controller
{
    public function register(){
		request()->validate([
			'bDate' => 'required',
			'password' => 'required|confirmed|min:8', //|password, cuando ya lo conecte a la base
			'email' => 'required|email',
			'nombre1' => 'required',
			'apellido1' => 'required',
			'apellido2' => 'required',
		]);

		Usuario::create([
			'login' => request('login'),
			'password' => request('password'),
			'email_login' => request('email'),
			'primer_nombre' => request('nombre1'),
			'segundo_nombre' => request('nombre2'),
			'primer_apellido' => request('apellido1'),
			'segundo_apellido' => request('apellido2'),
			'fecha_nacimiento' => request('bDate')
		]);

		return redirect('/');
	}
}