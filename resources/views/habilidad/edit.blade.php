@extends('layout')

@section('title', 'Registro de Habilidad')

@section('content')
    <div class="container">
        <h1>Editar habilidad</h1>
        <form method="POST" action= {{ route('habilidad.update', $habilidad) }} >
            @csrf @method('PATCH')
            
            @include('habilidad._form')
            
            <a class="btn btn-outline-danger" href="{{ route('habilidad.index') }}">Cancelar</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    <div>
@endsection
