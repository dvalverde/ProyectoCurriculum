<nav>
	<a href="{{route('welcome')}}">SCV</a>
	@auth
		<ul>
			<li ><a href= "/logout">Logout</a></li>
		</ul>
	@else
		<ul>
			<li class= "{{ setActive('login')}}"><a href= "/login">Login</a></li>
			<li class= "{{ setActive('register')}}"><a href= "/register">Register</a></li>
		</ul>
	@endauth
</nav>