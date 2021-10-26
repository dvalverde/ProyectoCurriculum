@extends('layout')
@section('title', 'Mis experiencias')

@section('content')
  <h2>Mis Experiencias</h2>
  <div class="container-fluid">
    <a href="{{ route('experiencia.create') }}">Nueva Experiencia</a>

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

    <ul class="list-group">
      @foreach ($resp as $exp)
        <li class="list-group-item">
          Descripcion: {{ $exp->descripcion }}</br>
          Fecha: {{ $exp->fecha_inicio }}</br>
          Duracion: {{ $exp->duracion }}</br>
          Tipo: {{ $exp->tipo }}</br>
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
                  <button type="submit" class="btn btn-primary btn-sm">Editar</button>
            </form>
            <form id="form" action="{{  url('borrar-experiencias') }}" method="POST">
              @csrf
                  <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
                  <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
            </form>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
