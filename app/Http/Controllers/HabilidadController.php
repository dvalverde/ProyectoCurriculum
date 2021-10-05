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
        request()->validate([
            'descripcion' => 'required',
            'dominio' => 'required|numeric|min:1|max:10',
        ]);

        $user = Auth::user();
        $user->habilidades()->create(request()->all());

        return redirect('/');
    }
}
