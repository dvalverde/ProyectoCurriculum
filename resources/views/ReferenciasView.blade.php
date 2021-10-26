@extends('layout')
@section('title', 'Mis Referencias')

@section('content')
  <h2>Mis Referencias</h2>
  <div class="container-fluid">
    <a class="btn btn-primary" href="{{ URL::route('referencia.create') }}">Nueva Referencia</a>

    <ul class="list-group">
    @foreach ($resp as $ref)
        <li class="list-group-item">
          Descripcion: {{ $ref->descripcion }}<br/>
          Nombre: {{ $ref->nombre }}<br/>
          Telefono: {{ $ref->telefono_contacto }}<br/>
          Email: {{ $ref->email_contacto }}<br/>
        </li>
    @endforeach
    </ul>
  </div>
@endsection
