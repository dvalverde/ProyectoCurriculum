<label class="form-label">
    Nombre
    <input required type="text" name="nombre" value="{{ old('nombre', $referencia->nombre) }}" class="form-control">
</label> <br>
{!! $errors->first('nombre', '<small>:message</small><br>') !!}

<label class="form-label">
    Correo de contacto
    <input required type="email" name="email_contacto", value="{{ old('email_contacto', $referencia->email_contacto) }}" class="form-control">
</label> <br>
{!! $errors->first('email_contacto', '<small>:message</small><br>') !!} 

<label class="form-label">
    Telefono de contacto
    <input required type="text" name="telefono_contacto", value="{{ old('telefono_contacto', $referencia->telefono_contacto) }}" class="form-control">
</label> <br>
{!! $errors->first('telefono_contacto', '<small>:message</small><br>') !!}

<label class="form-label">
    Descripción
    <textarea required type="text" name="descripcion" class="form-control">{{ old('descripcion', $referencia->descripcion) }}</textarea>
</label> <br>
{!! $errors->first('descripcion', '<small>:message</small><br>') !!}