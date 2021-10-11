<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
use App\Usuario;
use Illuminate\Support\Facades\Auth;

class HabilidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('habilidad.create', [
            'habilidad' => new Habilidad,
        ]);
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

    public function edit($id)
    {
        $habilidad = Auth::user()->habilidades()->find($id);
        if (is_null($habilidad)) {
            abort(404);
        }

        return view('habilidad.edit', compact('habilidad'));
    }

    public function update($id)
    {
        request()->validate([
            'descripcion' => 'required',
            'dominio' => 'required|numeric|min:1|max:10',
        ]);

        $habilidad = Auth::user()->habilidades()->find($id);
        if (is_null($habilidad)) {
            abort(401);
        }
        $habilidad->update(request()->all());

        return redirect('/');
    }
}
