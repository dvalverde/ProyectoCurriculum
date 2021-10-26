@extends('layout')
@section('title', 'Registrar referencia')

@section('content')
    <div class="container">
        <h1>Nueva referencia</h1>
        <form method="POST" action= {{ route('referencia.store') }} >
            @csrf
            <label class="form-label">
                Nombre
                <input required type="text" name="nombre" value="{{ old('nombre') }}" class="form-control">
            </label> <br>
            {!! $errors->first('nombre', '<small>:message</small><br>') !!}

            <label class="form-label">
                Correo de contacto
                <input required type="email" name="email_contacto", value="{{ old('email_contacto') }}" class="form-control">
            </label> <br>
            {!! $errors->first('email_contacto', '<small>:message</small><br>') !!} 

            <label class="form-label">
                Telefono de contacto
                <input required type="text" name="telefono_contacto", value="{{ old('telefono_contacto') }}" class="form-control">
            </label> <br>
            {!! $errors->first('telefono_contacto', '<small>:message</small><br>') !!}

            <label class="form-label">
                Descripción
                <textarea required type="text" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
            </label> <br>
            {!! $errors->first('descripcion', '<small>:message</small><br>') !!}

            <a class="btn btn-outline-danger" href="{{ route('referencia.index') }}">Cancelar</a>
            <button class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
