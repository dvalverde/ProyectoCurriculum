<?php


namespace App\Http\Controllers;

use App\Usuario;
use App\Experiencia;
use App\Tag;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showExperiencias(){
      session(['id_usuario_act' => 1]);//temporal Login
     $usuAct=Usuario::find(session('id_usuario_act'));
     $resp =$usuAct->experiencias()->with('tags')->get();
     return view('ExperienciasView',compact('resp'));
    }

    public function buscarExperiencias(Request $request){
      $tags = $request->input('tags');
      $tipo = $request->input('tipo');
      $resp = '';
      if($tags === null){
        if ($tipo == 'ALL') {
            $resp =Experiencia::where('id_usuario', session('id_usuario_act'))->with('tags')->get();
        } else {
            $resp =Experiencia::where('id_usuario', session('id_usuario_act'))->where('tipo',$tipo)->with('tags')->get();
        }
      } else {
        $resp =  collect([]);
        $tagColl = Tag::whereIn('tag', $tags)->get();
        if ($tipo == 'ALL') {
            foreach($tagColl as $tag){
              $resp=$resp->merge($tag->experiencias()->where('id_usuario',session('id_usuario_act'))->with('tags')->get());
            }
        } else {
            foreach($tagColl as $tag){
              $resp=$resp->merge($tag->experiencias()->where('id_usuario',session('id_usuario_act'))->where('tipo',$tipo)->with('tags')->get());
            }
        }
      }
     return view('ExperienciasView',compact('resp'));
   }

    public function showExperiencia(request $id){
     $resp =Experiencia::with('tags')->find($id->input('id'));
     return view('ExperienciasView',compact('resp'));
    }

    public function showCrearExperiencias(){
     return view('CreateExperienciaView');
    }

    public function showEditExperiencias(request $id){
    $exp =Experiencia::find($id->input('id'));
    $tags = implode(" ", $exp->tags()->pluck('tag')->toArray());
     return view('EditExperienciaView')->with(compact('exp','tags'));
    }

    public function crearExperiencia(Request $request)
    {
        //agregar id de usuario actual
        $usuAct=Usuario::find(session('id_usuario_act'));
        $request->merge([
          'id_usuario' => $usuAct->id,
        ]);
        $expAct = Experiencia::create([
          'descripcion' => $request->input('descripcion'),
          'tipo' => $request->input('tipo'),
          'fecha_inicio' => $request->input('fecha_inicio'),
          'duracion' => $request->input('duracion'),
          'id_usuario' => $request->input('id_usuario'),
        ]);
        //seleccionar tag
        $tags = $request->input('tags');//arreglo de tags
        //crear tags
        foreach ($tags as $tag) {
          $actTag = Tag::firstOrCreate(['tag' => $tag]);
          $expAct->tags()->attach($actTag->id);//relacionar a tag
        }
        //retornar todas las experiencias actualizadas
        $resp = Experiencia::where('id_usuario', session('id_usuario_act'))->get();
        return view('ExperienciasView',compact('resp'));
    }

    public function actualizarExperiencia(Request $request)
    {

        //crear experiencia con los datos 'descripcion','duracion','fecha_inicio','tipo'
        $expAct = Experiencia::find( $request->input('id'));
        $expAct->descripcion = $request->input('descripcion');
        $expAct->duracion = $request->input('duracion');
        $expAct->fecha_inicio = $request->input('fecha_inicio');
        $expAct->tipo = $request->input('tipo');
        $expAct->save();
        //seleccionar tag
        $tags = $request->input('tags');//arreglo de tags
        //crear tags
        foreach ($tags as $tag) {
          $actTag = Tag::firstOrCreate(['tag' => $tag]);
        }
        $ids=Tag::whereIn('tag', $tags)->pluck('id');
        $expAct->tags()->sync($ids);//relacionar a tags nuevas
        //retornar todas las experiencias actualizadas
        $resp = Experiencia::where('id_usuario', session('id_usuario_act'))->get();
        return view('ExperienciasView',compact('resp'));
    }

    public function borrarExperiencia(Request $id){
     Experiencia::find($id->input('id'))->tags()->detach();
     Experiencia::destroy($id->input('id'));
     $resp =Experiencia::where('id_usuario', session('id_usuario_act'))->get();
     //dd($resp);
     return view('ExperienciasView',compact('resp'));
    }


}
