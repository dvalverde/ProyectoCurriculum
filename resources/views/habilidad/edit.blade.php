@extends('layout')

@section('title', 'Registro de Habilidad')

@section('content')
    <h1>Editar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.update', $habilidad) }} >
        @csrf @method('PATCH')
        
        @include('habilidad._form')
        
        <button>Actualizar</button>
    </form>
@endsection
