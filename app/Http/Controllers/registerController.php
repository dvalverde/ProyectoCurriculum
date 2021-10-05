<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class registerController extends Controller
{
    public function store(){



    		return Usuario::create([

    			'login' => request('login'),
    			'password' => request('password'),
    			'email_login' => request('email'),
    			'primer_nombre' => request('nombre1'),
    			'segundo_nombre' => request('nombre2'),
    			'primer_apellido' => request('apellido1'),
    			'segundo_apellido' => request('apellido2'),
    			'fecha_nacimiento' => request('bDate')



    		]);
    		/*request()->validate([
    			'bDate' => 'required',
    			'login' => 'required',
    			'password' => 'required', //|password, cuando ya lo conecte a la base
    			'email' => 'required|email',
    			'nombre1' => 'required',
    			'nombre2' => 'required',
    			'apellido' => 'required'

    		]);*/
    	//return $request->get('email');
    	//return request('email'); y se elimina lo que está dentro de store() y el use Illuminate\Http\Request;
    	}

   /* public function create(){

     return view('register');
    }*/
}