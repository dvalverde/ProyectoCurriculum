<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habilidad;
use App\Usuario;
use App\Tag;
use Illuminate\Support\Facades\Auth;

class HabilidadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $user = Auth::user();
      $resp = $user->habilidades()->get();
      return view('HabilidadesView', compact('resp'));
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
        $habilidad = $user->habilidades()->create(request()->all());

        $tags = request('tags');
        if (!is_null($tags)) {
            foreach ($tags as $tag_name) {
                $tag = Tag::firstOrCreate(['tag'=>$tag_name]);
                $habilidad->tags()->attach($tag);
            }
        }

        return redirect()->route('habilidad.index');
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

        $tags = request('tags');
        if (!is_null($tags)) {
            $tags = array_map(function($tag_name) {
                return Tag::firstOrCreate(['tag'=>$tag_name])->id;
            }, $tags);
            $habilidad->tags()->sync($tags);
        }

        return redirect()->route('habilidad.index');
    }

    public function destroy($id) {
        $habilidad = Auth::user()->habilidades()->findOrFail($id);
        $habilidad->delete();
        return back();
    }
}
