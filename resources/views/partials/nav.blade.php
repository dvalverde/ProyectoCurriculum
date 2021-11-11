<nav class="navbar navbar-expand-md sticky-top navbar-light bg-light shadow-sm">
	<div class="container-fluid">
		<a class="navbar-brand" href="{{route('welcome')}}">SCV</a>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav me-auto">
			@auth
				<li>
					<a class="nav-link {{ setActive('experiencia.*') }}" href="{{ route('experiencia.index') }}">
						Experiencias
					</a>
				</li>
				<li>
					<a class="nav-link {{ setActive('habilidad.*') }}" href="{{ route('habilidad.index') }}">
						Habilidades
					</a>
				</li>
				<li>
					<a class="nav-link {{ setActive('referencia.*') }}" href="{{ route('referencia.index') }}">
						Referencias
					</a>
				</li>
			@endauth
			</ul>

			<ul class="navbar-nav ms-auto">
			@auth
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						{{ Auth::user()->nombreCompleto() }}
					</a>
					<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
						<div class="dropdown-item">
							<big>{{ Auth::user()->nombreCompleto() }}</big>
							<br>
							<span>{{ Auth::user()->email_login }}</span>
						</div>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesión</a>
					</div>
				</li>
			@else
				<li>
					<a class="nav-link {{ setActive('referencia.*') }}" href= "/login">
						Login
					</a>
				</li>
				<li>
					<a class="nav-link {{ setActive('referencia.*') }}" href= "/register">
						Register
					</a>
				</li>
			@endauth
			</ul>
		</div>
	<div>
</nav>