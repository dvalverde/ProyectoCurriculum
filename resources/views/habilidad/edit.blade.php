<!DOCTYPE html>
<head>
    <title>Editar Habilidad</title>
</head>
<body>
    <h1>Editar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.update', $habilidad) }} >
        @csrf @method('PATCH')

        @include('habilidad._form')

        <button>Actualizar</button>
    </form>
</body>
