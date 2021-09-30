<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
use Illuminate\Support\Facades\Auth;

class HabilidadController extends Controller
{
    public function create()
    {
        return view('habilidad.create');
    }

    public function store()
    {
        Habilidad::create([
            'id_usuario' => Auth::id(),
            'descripcion' => request('descripcion'),
            'dominio' => request('dominio'),
        ]);
    }
}
