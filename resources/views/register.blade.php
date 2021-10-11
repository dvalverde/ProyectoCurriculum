@extends("layout")

@section('tittle', 'Register')

@section('content') <!--En donde vamos a insertar esta sección-->

	<h1>Registro</h1>

	<form method="POST" action="{{ route('register') }}">
		@csrf <!--Directiva para proteger formularios de suplantación de información-->

		<input type="text" name="email"placeholder="Correo..." value="{{ old('email') }}" required><br>
		{!! $errors->first('email', '<small>:message</small><br>')!!}

		<input name="nombre1" placeholder="Primer Nombre..." value="{{ old('nombre1') }}" required><br>
		{!! $errors->first('nombre1', '<small>:message</small><br>')!!}

		<input name="nombre2" placeholder="Segundo Nombre..." value="{{ old('nombre2') }}"><br>
		{!! $errors->first('nombre2', '<small>:message</small><br>')!!}

		<input name="apellido1" placeholder="Primer Apellido..." value="{{ old('apellido1') }}" required><br>
		{!! $errors->first('apellido1', '<small>:message</small><br>')!!}

		<input name="apellido2" placeholder="Segundo Apellido..." value="{{ old('apellido2') }}"><br>
		{!! $errors->first('apellido2', '<small>:message</small><br>')!!}

		<input type="date" name="bDate" placeholder="Fecha Nacimiento..." value="{{ old('bDate') }}" required><br>
		{!! $errors->first('bDate', '<small>:message</small><br>')!!}

		<input name="password" type="password" placeholder="Contraseña..." value="{{ old('password') }}" required><br>
		{!! $errors->first('password', '<small>:message</small><br>')!!}

		<input name="password_confirmation" type="password" placeholder="Confirmar Contraseña..." value="{{ old('password_confirmation') }}" required><br>
		{!! $errors->first('password', '<small>:message</small><br>')!!}

		<!--<textarea>-->
		<button>Registrarse</button>
	</form>

@endsection


{{--<ul>
		 
		@forelse($registro as $registroItem)

			<li>{{ $registroItem['title'] }}</li>
		@empy
			<li>No hay proyectos para mostrar</li>
		@endforelse
		
	</ul>--}}