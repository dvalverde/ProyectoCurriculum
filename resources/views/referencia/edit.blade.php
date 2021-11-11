@extends('layout')
@section('title', 'Registrar referencia')

@section('content')
    <div class="container">
        <h1>Editar referencia</h1>
        <form method="POST" action= {{ route('referencia.update', ['id' => $referencia->id]) }} >
            @csrf @method('PATCH')
            @include('referencia._form')

            <a class="btn btn-outline-danger" href="{{ route('referencia.index') }}">Cancelar</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
