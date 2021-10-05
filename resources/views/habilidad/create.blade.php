<!DOCTYPE html>
<head>
    <title>Registro de Habilidad</title>
</head>
<body>
    <h1>Registrar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.store') }} >
        @csrf

        @include('habilidad._form')

        <button>Guardar</button>
    </form>
</body>
