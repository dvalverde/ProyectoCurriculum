<!DOCTYPE html>
<head>
    <title>Registro de Habilidad</title>
</head>
<body>
    <h1>Registrar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.store') }} >
        @csrf
        <label>
            Descripción
            <input required type="text" name="descripcion" value="{{ old('descripcion') }}">
        </label> <br>
        {!! $errors->first('descripcion', '<small>:message</small><br>') !!}

        <label>
            Dominio
            <input required type="number" name="dominio" min="1" max="10" value="{{ old('dominio') }}">
        </label> <br>
        {!! $errors->first('dominio', '<small>:message</small><br>') !!}

        <button>Guardar</button>
    </form>
</body>
