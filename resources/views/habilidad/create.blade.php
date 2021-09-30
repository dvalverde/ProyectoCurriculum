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
            <input required type="text" name="descripcion">
        </label>
        <label>
            Dominio
            <input required type="number" name="dominio" min="1" max="10">
        </label>
        <button>Guardar</button>
    </form>
</body>
