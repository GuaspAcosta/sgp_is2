<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Inicio</a></li>
          @auth
            @role('admin')
            <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Usuario</a></li>
            <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>
            @endrole
            <li><a href="{{ route('proyecto.index') }}" class="nav-link px-2 text-white">Proyectos</a></li>
          @endauth
        </ul>
        @auth
          {{auth()->user()->name}}&nbsp;
          <div class="text-end">
            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-outline-light me-2">Logout</a>
          </div>
        @endauth
  
        @guest
          <div class="text-end">
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Iniciar Sesión</a>
            </div>
        @endguest
      </div>

    </div>
  </header>