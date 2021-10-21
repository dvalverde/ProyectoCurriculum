 <!-- Este es el login del proyecto "Prueba-->

 @extends("layout")

@section('title', 'Login')

@section('content') <!--En donde vamos a insertar esta sección-->

	<h1>Login</h1>

	<form method="POST" action="{{ route('login')}}">
		{!! $errors->first('login', ':message<br>')!!}

		@csrf <!--Directiva para proteger formularios de suplantación de información-->
		<input type="text" name="email_login" placeholder="Correo..." value="{{ old('email_login') }}"><br>
		{!! $errors->first('email_login', '<small>:message</small><br>')!!}

		<input name="password" type="password" placeholder="Contraseña..."><br>
		{!! $errors->first('password', '<small>:message</small><br>')!!}
		
		<input type="checkbox" name="remember" value="1">
		<label for="remember">Recordar sesión</label>
		<br>

		<button>Entrar</button>
	</form>

@endsection