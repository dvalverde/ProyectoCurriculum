<div>
    <label class="form-label">
        Descripción
        <input required type="text" name="descripcion" class="form-control"
        value="{{ old('descripcion', $habilidad->descripcion) }}">
    </label> <br>
    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
</div>

<div>
    <label class="form-label">
        Nivel de dominio
        <fieldset id="dominio">
            <label> <input type="radio" name="dominio" value="1"  {{ (old('dominio', $habilidad->dominio) == "1")?  "checked" : "" }}>  1 </label>
            <label> <input type="radio" name="dominio" value="2"  {{ (old('dominio', $habilidad->dominio) == "2")?  "checked" : "" }}>  2 </label>
            <label> <input type="radio" name="dominio" value="3"  {{ (old('dominio', $habilidad->dominio) == "3")?  "checked" : "" }}>  3 </label>
            <label> <input type="radio" name="dominio" value="4"  {{ (old('dominio', $habilidad->dominio) == "4")?  "checked" : "" }}>  4 </label>
            <label> <input type="radio" name="dominio" value="5"  {{ (old('dominio', $habilidad->dominio) == "5")?  "checked" : "" }}>  5 </label>
            <label> <input type="radio" name="dominio" value="6"  {{ (old('dominio', $habilidad->dominio) == "6")?  "checked" : "" }}>  6 </label>
            <label> <input type="radio" name="dominio" value="7"  {{ (old('dominio', $habilidad->dominio) == "7")?  "checked" : "" }}>  7 </label>
            <label> <input type="radio" name="dominio" value="8"  {{ (old('dominio', $habilidad->dominio) == "8")?  "checked" : "" }}>  8 </label>
            <label> <input type="radio" name="dominio" value="9"  {{ (old('dominio', $habilidad->dominio) == "9")?  "checked" : "" }}>  9 </label>
            <label> <input type="radio" name="dominio" value="10" {{ (old('dominio', $habilidad->dominio) == "10")? "checked" : "" }}> 10 </label>
        </fieldset>
    </label> <br>
    {!! $errors->first('dominio', '<small>:message</small><br>') !!}
</div>

<div>
    <label class="form-label">
        Tags
        <select multiple name="tags[]" id="tags" data-role="tagsinput" class="form-control">
            @foreach ($habilidad->tags as $tag)
                <option value="{{$tag->tag}}">{{$tag->tag}}</option>
            @endforeach
        </select>
    </label> <br>
    {!! $errors->first('tags', '<small>:message</small><br>') !!}
</div>

<script>
    $('#tags').tagsinput({
        confirmKeys: [13, 32, 44]
    });
</script>
