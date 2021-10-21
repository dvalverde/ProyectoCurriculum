@extends('layout')
@section('title', 'Registrar experiencia')

@section('content')
    <div class="flex-center position-ref full-height">
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
                <input type="date" id="fechaInicio" name="fecha_inicio" value="2020-01-01"  min="1950-01-01" max="{{ Carbon\Carbon::now()->toDateString() }}">
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
@endsection
