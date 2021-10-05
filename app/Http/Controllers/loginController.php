<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function store(){

    		request()->validate([
    			'email' => 'required|email',
    			'password' => 'required' //|password, cuando ya lo conecte a la base


    		]);

    		return 'Datos Validados';
    	//return $request->get('email');
    	//return request('email'); y se elimina lo que está dentro de store() y el use Illuminate\Http\Request;
    	}
}