<nav>
	<ul>
		<li><a href="{{route('welcome')}}">SCV</a></li>
	@auth
		<li><a class="{{ setActive('infoExp') }}" href="{{ route('infoExp') }}">Experiencias</a></li>
		<li><a class="{{ setActive('habilidad.*') }}" href="{{ route('habilidad.show') }}">Habilidades</a></li>
		<li><a class="{{ setActive('referencia.*') }}" href="{{ route('referencia.show') }}">Referencias</a></li>
		<li style="float:right"> <a href= "/logout">Logout</a></li>
		<li style="float:right"><a>{{ Auth::user()->email_login }}</a></li>
	@else
		<li style="float:right" class= "{{ setActive('login')}}"><a href= "/login">Login</a></li>
		<li style="float:right" class= "{{ setActive('register')}}"><a href= "/register">Register</a></li>
	@endauth
	</ul>
</nav>