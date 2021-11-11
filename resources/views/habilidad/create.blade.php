@extends('layout')

@section('title', 'Registrar Habilidad')

@section('content')
    <div class="container">
        <h2>Nueva habilidad</h2>

        <form method="POST" action= {{ route('habilidad.store') }} >
            @csrf

            @include('habilidad._form')

            <a class="btn btn-outline-danger" href="{{ route('habilidad.index') }}">Cancelar</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
