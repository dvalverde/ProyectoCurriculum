<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datos de usuario</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
  <div class="container">
    <a href="{{ URL::route('crearExp') }}">Crear Experiencia</a>
    <div class="container">
        <form id="form" action="{{  URL::route('buscarExp') }}" method="GET">
            @csrf
            <div class="container">
              <div class="container">
                Tags: <input type="text" id="fExpTags" placeholder="tagA tagB,tagC" onfocusout="separacion()">
                <div class="container" id="tags">
                </div>
              </div>
              <select name="tipo" id="tipo">
                <option value="ALL">Todas</option>
                <option value="Academico">Academico</option>
                <option value="Laboral">Laboral</option>
                <option value="Publicacion">Publicacion</option>
                <option value="Otro">Otro</option>
              </select>
              <button type="submit" class="btn btn-outline-success btn-block">Buscar</button>
            </div>
        </form>
    </div>
  </div>

  <div class="container">
  @foreach ($resp as $exp)
      <div class="container">
        <p></p>
        <p>Descripcion: {{ $exp->descripcion }}</p>
        <p>Fecha: {{ $exp->fecha_inicio }}</p>
        <p>Duracion: {{ $exp->duracion }}</p>
        <p>Tipo: {{ $exp->tipo }}</p>
        <div class="container">
          <p>Tags:
          @foreach ($exp->tags as $tag)
            # {{ $tag->tag }}
          @endforeach
          </p>
        </div>
        <div class="container">
          <form id="form" action="{{  url('editar-experiencias') }}" method="GET">
                <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
                <button type="submit" class="btn btn-outline-success btn-block">Editar</button>
          </form>
          <form id="form" action="{{  url('borrar-experiencias') }}" method="POST">
            @csrf
                <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
                <button type="submit" class="btn btn-outline-success btn-block">Borrar</button>
          </form>
        </div>
      </div>
  @endforeach
  </div>
</body>

<!-- JavaScript -->
<script type="text/javascript">
function separacion() {
  var tagContainer = document.getElementById("tags");
  tagContainer.innerHTML = '';
  var x = document.getElementById("fExpTags");
  x.value = x.value.replace(",", " ").replace(/  +/g, " ").toLowerCase();
  var regEx = /^[a-zA-Z ]+$/;
  if(x.value.match(regEx))
    {
      const myArr = x.value.split(" ");
      myArr.forEach(function(ele) {
        var x = document.getElementById("tags");
        var new_field = document.createElement("input");
        new_field.setAttribute("type", "hidden");
        new_field.setAttribute("name", "tags[]");
        new_field.setAttribute("value", ele);
        x.appendChild(new_field);
      });

    }
  else
    {
      alert("Solo se aceptan palabras.");
    }
}
</script>
</html>
