@extends('layout')
@section('title', 'Mis habilidades')

@section('content')
  <div class="flex-center position-ref full-height">
    <a href="{{ URL::route('habilidad.create') }}">Crear Habilidad</a>
    <div>
      @foreach ($resp as $hab)
        <div>
          <p></p>
          <p>Descripcion: {{ $hab->descripcion }}</p>
          <p>Dominio: {{ $hab->dominio }}</p>
          <div>
            <p>Tags:
            @foreach ($hab->tags as $tag)
              # {{ $tag->tag }}
            @endforeach
            </p>
          </div>
          <div>
            <form id="form" action="{{  route('habilidad.edit', ['id' => $hab->id]) }}" method="GET">
                  <button type="submit" class="btn btn-outline-success btn-block">Editar</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
