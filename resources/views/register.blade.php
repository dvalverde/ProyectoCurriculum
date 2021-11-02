@extends("layout")

@section('title', 'Register')

@section('content') <!--En donde vamos a insertar esta sección-->
	<h2>Registro</h2>

	<form method="POST" action="{{ route('register') }}">
		@csrf <!--Directiva para proteger formularios de suplantación de información-->

		<label class="form-label">
			Correo
			<input type="email" name="email" placeholder="Correo..." value="{{ old('email') }}" class="form-control" required><br>
			{!! $errors->first('email', '<small>:message</small><br>')!!}
		</label><br>

		<label class="form-label">
			Primer Nombre
			<input name="nombre1" placeholder="Primer Nombre..." value="{{ old('nombre1') }}" class="form-control" required><br>
			{!! $errors->first('nombre1', '<small>:message</small><br>')!!}
		</label>

		<label class="form-label">
			Segundo Nombre
			<input name="nombre2" placeholder="Segundo Nombre..." value="{{ old('nombre2') }}" class="form-control"><br>
			{!! $errors->first('nombre2', '<small>:message</small><br>')!!}
		</label><br>

		<label class="form-label">
			Primer Apellido
			<input name="apellido1" placeholder="Primer Apellido..." value="{{ old('apellido1') }}" class="form-control" required><br>
			{!! $errors->first('apellido1', '<small>:message</small><br>')!!}
		</label>

		<label class="form-label">
			Segundo Apellido
			<input name="apellido2" placeholder="Segundo Apellido..." value="{{ old('apellido2') }}" class="form-control"><br>
			{!! $errors->first('apellido2', '<small>:message</small><br>')!!}
		</label><br>

		<label class="form-label">
			Fecha de nacimiento
			<input type="date" name="bDate" placeholder="Fecha Nacimiento..." value="{{ old('bDate') }}" class="form-control" required><br>
			{!! $errors->first('bDate', '<small>:message</small><br>')!!}
		</label><br>

		<label class="form-label">
			Contraseña
			<input name="password" type="password" placeholder="Contraseña..." value="{{ old('password') }}" class="form-control" required><br>
			{!! $errors->first('password', '<small>:message</small><br>')!!}
		</label>

		<label class="form-label">
			Confirmar contraseña
			<input name="password_confirmation" type="password" placeholder="Confirmar Contraseña..." value="{{ old('password_confirmation') }}" class="form-control" required><br>
			{!! $errors->first('password', '<small>:message</small><br>')!!}
		</label><br>

		<!--<textarea>-->
		<a href="/" class="btn btn-outline-danger">Cancelar</a>
		<button class="btn btn-success">Registrarse</button>
	</form>
@endsection


{{--<ul>
		 
		@forelse($registro as $registroItem)

			<li>{{ $registroItem['title'] }}</li>
		@empy
			<li>No hay proyectos para mostrar</li>
		@endforelse
		
	</ul>--}}