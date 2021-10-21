@extends('layout')
@section('title', 'Mis Referencias')

@section('content')
  <div class="flex-center position-ref full-height">
    <a href="{{ URL::route('referencia.create') }}">Crear Referencia</a>
    <div>
    @foreach ($resp as $ref)
        <div>
          <p></p>
          <p>Descripcion: {{ $ref->descripcion }}</p>
          <p>Nombre: {{ $ref->nombre }}</p>
          <p>Telefono: {{ $ref->telefono_contacto }}</p>
          <p>Email: {{ $ref->email_contacto }}</p>
        </div>
    @endforeach
    </div>
  </div>
@endsection
