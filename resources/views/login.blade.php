 <!-- Este es el login del proyecto "Prueba-->

 @extends("layout")

@section('tittle', 'Login')

@section('content') <!--En donde vamos a insertar esta sección-->

	<h1>Login</h1>

	<form method="POST" action="{{ route('login')}}">
		@csrf <!--Directiva para proteger formularios de suplantación de información-->
		<input type="text" name="email"placeholder="Correo..." value="{{ old('email') }}"><br>
		{!! $errors->first('email', '<small>:message</small><br>')!!}

		<input name="password" placeholder="Contraseña..." value="{{ old('password') }}"><br>
		{!! $errors->first('password', '<small>:message</small><br>')!!}
		<!--<textarea>-->
		<button>Enviar</button>
	</form>

@endsection