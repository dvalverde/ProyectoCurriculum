<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
use App\Usuario;
use Illuminate\Support\Facades\Auth;

class HabilidadController extends Controller
{
    public function create()
    {
        return view('habilidad.create');
    }

    public function store()
    {
        $user = Auth::user();

        $user->habilidades()->create([
            'descripcion' => request('descripcion'),
            'dominio' => request('dominio'),
        ]);
    }
}
