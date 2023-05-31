<div class="row">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h4>Registro de asistencia estudiantil</h4></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('centros.index')}}">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Centros Educativos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('centros.index')}}">Listado de Centros</a></li>
              <li><a class="dropdown-item" href="{{route('matricula.index')}}">Matricula por centro</a></li>
              <li><a class="dropdown-item" href="{{route('directores.index')}}">Directores</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Registrar Asistencia</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opciones
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Registrarse</a></li>
              <li><a class="dropdown-item" href="#">Log in</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>