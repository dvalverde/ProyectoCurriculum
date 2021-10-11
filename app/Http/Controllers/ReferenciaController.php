<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('referencia.create');
    }

    public function store()
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'email_contacto' => 'required|email',
            'telefono_contacto' => 'required|numeric'
        ]);

        $user = Auth::user();
        $user->referencias()->create(request()->all());

        return redirect('/');
    }
}
