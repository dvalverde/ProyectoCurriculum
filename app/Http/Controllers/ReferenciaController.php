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

    public function index()
    {
      $user = Auth::user();
      $resp = $user->referencias()->get();
      return view('ReferenciasView', compact('resp'));
    }

    public function create()
    {
        return view('referencia.create', ['referencia' => new Referencia]);
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

        return redirect()->route('referencia.index');
    }

    public function edit($id)
    {
        $referencia = Auth::user()->referencias()->findOrFail($id);

        return view('referencia.edit', compact('referencia'));
    }

    public function update($id)
    {
        request()->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'email_contacto' => 'required|email',
            'telefono_contacto' => 'required|numeric'
        ]);

        $habilidad = Auth::user()->referencias()->findOrFail($id);
        $habilidad->update(request()->all());

        return redirect()->route('referencia.index');
    }

    public function destroy($id)
    {
        $referencia = Auth::user()->referencias()->findOrFail($id);
        $referencia->delete();
        return back();
    }
}
