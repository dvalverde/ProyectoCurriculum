<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habilidads de usuario</title>
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
</head>

<body>
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
    <a href="{{ URL::route('habilidad.create') }}">Crear Habilidad</a>
    <div>
    @foreach ($resp as $hab)
        <div>
          <p></p>
          <p>Descripcion: {{ $hab->descripcion }}</p>
          <p>Dominio: {{ $hab->dominio }}</p>
          <div>
            <p>Tags:
            @foreach ($hab->tags as $tag)
              # {{ $tag->tag }}
            @endforeach
            </p>
          </div>
          <div>
            <form id="form" action="{{  route('habilidad.edit', ['id' => $hab->id]) }}" method="GET">
                  <button type="submit" class="btn btn-outline-success btn-block">Editar</button>
            </form>
          </div>
        </div>
    @endforeach
    </div>
  </div>
</body>

<!-- JavaScript -->
<script type="text/javascript">
function separacion() {
  var tagContainer = document.getElementById("tags");
  tagContainer.innerHTML = '';
  var x = document.getElementById("fHabTags");
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
