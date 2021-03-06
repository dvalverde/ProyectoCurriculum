@extends('layout')
@section('title', 'Editar experiencia')

@section('content')
    <div class="container position-ref full-height">
        <h2>Editar Experiencia</h2>
        <form id="form" action="{{ route('experiencia.update') }}" method="POST">
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
                <textarea name="descripcion" rows="1" placeholder="Descripcion de la experiencia" class="form-control">{{ $exp->descripcion }}</textarea>
              </div>
              <div >
                <label for="start">Fecha inicio:</label>
                <input type="date" id="fechaInicio" name="fecha_inicio" value="{{ $exp->fecha_inicio }}"  min="1950-01-01" max="{{ Carbon\Carbon::now()->toDateString() }}">
                <label for="start">Duracion:
                <input type="text" id="Duracion" name="duracion" value="{{ $exp->duracion }}" placeholder="ej: 5 meses">
              </div>
              <div >
                <label for="tipo">Tipo: </label>
                <select name="tipo" id="tipo">
                  <option value="Academico" <?=$exp->tipo == 'Academico' ? ' selected="selected"' : '';?>>Academico</option>
                  <option value="Laboral" <?=$exp->tipo == 'Laboral' ? ' selected="selected"' : '';?>>Laboral</option>
                  <option value="Publicacion" <?=$exp->tipo == 'Publicacion' ? ' selected="selected"' : '';?>>Publicacion</option>
                  <option value="Otro" <?=$exp->tipo == 'Otro' ? ' selected="selected"' : '';?>>Otro</option>
                </select>
              </div>
              <div >
                Tags: <input type="text" id="fExpTags" placeholder="tagA tagB,tagC" value="{{ $tags }}" onfocusout="separacion()">
                <div  id="tags">
                  @foreach (explode(" ", $tags) as $tag)
                    <input type="hidden" name="tags[]" value="{{ $tag }}">
                  @endforeach
                </div>
              </div>
              <input type="hidden" id="id" name="id" value="{{ $exp->id }}">
              <a class="btn btn-outline-danger" href="{{ route('experiencia.index') }}">Cancelar</a>
              <button type="submit" class="btn btn-success btn-block">Guardar</button>
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
