<!-- Este es el login del proyecto "Prueba-->

@extends("layout")

@section('title', 'Login')

@section('content') <!--En donde vamos a insertar esta sección-->
	<h2>Login</h2>

	<form method="POST" action="{{ route('login')}}">
		{!! $errors->first('login', ':message<br>')!!}

		@csrf <!--Directiva para proteger formularios de suplantación de información-->

		<label class="form-label">
			Correo
			<input type="text" name="email_login" placeholder="Correo..." value="{{ old('email_login') }}" class="form-control">
		</label><br>
		{!! $errors->first('email_login', '<small>:message</small><br>')!!}

		<label class="form-label">
			Contraseña
			<input name="password" type="password" placeholder="Contraseña..." class="form-control">
		</label><br>
		{!! $errors->first('password', '<small>:message</small><br>')!!}
		
		<input type="checkbox" name="remember" value="1">
		<label for="remember">Recordar sesión</label>
		<br>

		<button class="btn btn-success">Entrar</button>
	</form>

@endsection