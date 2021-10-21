@extends('layout')
@section('title', 'Mis experiencias')

@section('content')
  <div class="flex-center position-ref full-height">
    <a href="{{ route('experiencia.create') }}">Crear Experiencia</a>

    <div>
        <form id="form" action="{{  route('experiencia.search') }}" method="GET">
            @csrf
            <div>
              <div>
                Tags: <input type="text" id="fExpTags" placeholder="tagA tagB,tagC" onfocusout="separacion()">
                <div id="tags">
                </div>
              </div>
              <select name="tipo" id="tipo">
                <option value="ALL">Todas</option>
                <option value="Academico">Academico</option>
                <option value="Laboral">Laboral</option>
                <option value="Publicacion">Publicacion</option>
                <option value="Otro">Otro</option>
              </select>
              <button type="submit" class="btn btn-outline-success btn-block">Buscar</button>
            </div>
        </form>
    </div>

    <div>
      @foreach ($resp as $exp)
        <div>
          <p></p>
          <p>Descripcion: {{ $exp->descripcion }}</p>
          <p>Fecha: {{ $exp->fecha_inicio }}</p>
          <p>Duracion: {{ $exp->duracion }}</p>
          <p>Tipo: {{ $exp->tipo }}</p>
          <div>
            <p>Tags:
            @foreach ($exp->tags as $tag)
              # {{ $tag->tag }}
            @endforeach
            </p>
          </div>
          <div>
            <form id="form" action="{{  url('editar-experiencias') }}" method="GET">
                  <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
                  <button type="submit" class="btn btn-outline-success btn-block">Editar</button>
            </form>
            <form id="form" action="{{  url('borrar-experiencias') }}" method="POST">
              @csrf
                  <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
                  <button type="submit" class="btn btn-outline-success btn-block">Borrar</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
