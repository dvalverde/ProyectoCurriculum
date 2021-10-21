<!DOCTYPE html>
<head>
    <title>Registro de Habilidad</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
</head>
<body>
    <h1>Registrar habilidad</h1>
    <form method="POST" action= {{ route('habilidad.store') }} >
        @csrf

        @include('habilidad._form')

        <button>Guardar</button>
    </form>
</body>
