<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Experiencias</title>
    <!-- CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    .button {
        background-color: #636b6f;
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .button-def {border-radius: 12px;}

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
    </style>
    <script type="text/javascript" src="{{ URL::asset('js/separacion.js') }}"></script>
</head>

<body  onload="fechaActual();">
    <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ route('menu') }}">Home</a>
                  <a href="{{ route('logout') }}">Logout</a>
              @else
                  <a href="{{ route('login') }}">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          </div>
      @endif
        <a href="{{ url('info-experiencias') }}">Cancelar</a>
        <form id="form" action="{{ url('crear-experiencias') }}" method="POST">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
            @endif
            <div >
              <div >
                <label for="start">Descripcion </label>
                <textarea name="descripcion" rows="1" placeholder="Descripcion de la experiencia" class="form-control">descripcion</textarea>
              </div>
              <div >
                <label for="start">Fecha inicio:</label>
                <input type="date" id="fechaInicio" name="fecha_inicio" value="2020-01-01"  min="1950-01-01" max="2100-01-01">
                <label for="start">Duracion:
                <input type="text" id="Duracion" name="duracion" placeholder="ej: 5 meses">
              </div>
              <div >
                <label for="tipo">Tipo: </label>
                <select name="tipo" id="tipo">
                  <option value="Academico">Academico</option>
                  <option value="Laboral">Laboral</option>
                  <option value="Publicacion">Publicacion</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
              <div >
                Tags: <input type="text" id="fExpTags" placeholder="tag" onfocusout="separacion()">
                <div  id="tags">
                </div>
              </div>
              <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
            </div>
        </form>
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

<script type="text/javascript">
function fechaActual() {
  var fecha = new Date();
  var dd = fecha.getDate();
  var mm = fecha.getMonth() + 1;
  var yyyy = fecha.getFullYear();

  if (dd < 10) {
     dd = '0' + dd;
  }

  if (mm < 10) {
     mm = '0' + mm;
  }

  fecha = yyyy + '-' + mm + '-' + dd;
  document.getElementById("fechaInicio").setAttribute("max", fecha);
}
</script>
</html>
