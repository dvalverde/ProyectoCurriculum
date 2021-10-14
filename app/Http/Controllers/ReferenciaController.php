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

    public function show()
    {
      $user = Auth::user();
      $resp = $user->referencias()->get();
      return view('ReferenciasView', compact('resp'));
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

        return ReferenciaController::show();
    }
}
