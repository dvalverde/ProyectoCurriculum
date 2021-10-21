@extends('layout')

@section('title', 'Registrar Habilidad')

@section('content')
    <h1>Registrar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.store') }} >
        @csrf

        @include('habilidad._form')

        <button>Guardar</button>
    </form>
@endsection
