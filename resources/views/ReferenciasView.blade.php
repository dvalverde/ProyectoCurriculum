@extends('layout')
@section('title', 'Mis Referencias')

@section('content')
  <h2>Mis Referencias</h2>
  <div class="container-fluid">
    <a class="btn btn-primary" href="{{ route('referencia.create') }}">Nueva Referencia</a>

    <ul class="list-group">
    @foreach ($resp as $ref)
        <li class="list-group-item">
          Descripcion: {{ $ref->descripcion }}<br/>
          Nombre: {{ $ref->nombre }}<br/>
          Telefono: {{ $ref->telefono_contacto }}<br/>
          Email: {{ $ref->email_contacto }}<br/>

          <a class="btn btn-sm btn-primary" href="{{  route('referencia.edit', ['id'=>$ref->id]) }}">Editar</a>
          {{ Form::open(['method' => 'DELETE', 'route' => ['referencia.destroy', $ref->id]]) }}
            {{ Form::button('Borrar', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger')) }}
          {{ Form::close() }}
        </li>
    @endforeach
    </ul>
  </div>
@endsection
