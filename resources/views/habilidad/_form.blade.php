<label>
    Descripción
    <input required type="text" name="descripcion"
    value="{{ old('descripcion', $habilidad->descripcion) }}">
</label> <br>
{!! $errors->first('descripcion', '<small>:message</small><br>') !!}

<label>
    Dominio
    <input required type="number" name="dominio" min="1" max="10"
    value="{{ old('dominio', $habilidad->dominio) }}">
</label> <br>
{!! $errors->first('dominio', '<small>:message</small><br>') !!}
