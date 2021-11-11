@extends('layout')
@section('title', 'Mis habilidades')

@section('content')
  <h2>Mis Habilidades</h2>

  <div class="container-fluid">
    <a class="btn btn-primary" href="{{ URL::route('habilidad.create') }}">Nueva Habilidad</a>

    <div class="mx-auto">
      <ul class="list-group">
        @foreach ($resp as $hab)
          <li class="list-group-item">
            <h4>{{ $hab->descripcion }}</h4>
            Dominio: <meter min="1" max="10" value="{{ $hab->dominio }}">{{ $hab->dominio }}</meter><br/>
            <div>
              Tags:
              @foreach ($hab->tags as $tag)
                #{{ $tag->tag }}
              @endforeach
            </div>
            <div> 
              <a class="btn btn-sm btn-primary" href="{{  route('habilidad.edit', ['id'=>$hab->id]) }}">Editar</a>
              {{ Form::open(['method' => 'DELETE', 'route' => ['habilidad.destroy', $hab->id]]) }}
                {{ Form::button('Borrar', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger')) }}
              {{ Form::close() }}
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
@endsection
