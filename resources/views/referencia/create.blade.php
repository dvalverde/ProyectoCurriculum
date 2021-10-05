<!DOCTYPE html>
<head>
    <title>Registro de Referencia</title>
</head>
<body>
    <h1>Registrar referencia</h1>
    <form method="POST" action= {{ route('referencia.store') }} >
        @csrf
        <label>
            Nombre
            <input required type="text" name="nombre" value="{{ old('nombre') }}">
        </label> <br>
        {!! $errors->first('nombre', '<small>:message</small><br>') !!}

        <label>
            Correo de contacto
            <input required type="email" name="email_contacto", value="{{ old('email_contacto') }}">
        </label> <br>
        {!! $errors->first('email_contacto', '<small>:message</small><br>') !!} 

        <label>
            Telefono de contacto
            <input required type="text" name="telefono_contacto", value="{{ old('telefono_contacto') }}">
        </label> <br>
        {!! $errors->first('telefono_contacto', '<small>:message</small><br>') !!}

        <label>
            Descripción
            <textarea required type="text" name="descripcion">{{ old('descripcion') }}</textarea>
        </label> <br>
        {!! $errors->first('descripcion', '<small>:message</small><br>') !!}

        <button>Guardar</button>
    </form>
</body>
