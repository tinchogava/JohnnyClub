<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="#"><i class = "fa fa-dashboard"></i> Dashboard</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">Administrador: {{ Auth::user()->user }}</p>
      <ul class="nav navbar-nav navbar-center">
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Bodegas</a></li>
        <li><a href="#">Varietales</a></li>
        <li><a href="#">Ciudades</a></li>
        <li><a href="#">Provincias</a></li>
        <li><a href="#">Paises</a></li>
        &nbsp;&nbsp;&nbsp;
        <li><a href="#">Vista de usuario</a></li>
      </ul>
      <ul class = "nav navbar-nav navbar-right">
       	<li><a href="#">Soporte Técnico</a></li> 
        <li class = "dropdown">
          <a href="#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded="false">
            <i class ="fa fa-user"></i>&nbsp; <span class = "caret"></span>
          </a>
          <ul class = "dropdown-menu" role = "menu">
          <li>
            <a href="{{ route('auth.logout') }}">Finalizar Sesión</a>
          </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 