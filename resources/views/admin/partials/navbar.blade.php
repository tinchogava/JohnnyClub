<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav navbar-center">
                  <li><a href="{{ route ('admin.category.index') }}">Categorias</a></li>
                  <li><a href="{{ route('admin.product.index') }}">Productos</a></li>
                  <li><a href="{{ route ('admin.winery.index') }}">Bodegas</a></li>
                  <li><a href="{{ route ('admin.varietal.index') }}">Varietales</a></li>
                  <li class = "dropdown">
                    <a href="#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded="false">
                      <i class ="fa fa-cog"></i>&nbsp;Otros Datos <span class = "caret"></span>
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                    <li>
                      <li><a href="">Ciudades</a></li>
                      <li><a href="#">Provincias</a></li>
                      <li><a href="#">Paises</a></li>
                    </li>
                    </ul>
                  </li>
                  
                </ul>
                  
              </div>
              <div class = "right">
              <div class ="col-sm-4 col-xs-3 nav navbar-nav">
                <li class = "dropdown">
                    <a href="#" class = "dropdown-toggle" data-toggle = "dropdown" role = "button" aria-expanded="false">
                      <i class ="fa fa-user"></i>&nbsp;&nbsp;Administrador: {{ Auth::user()->name }}&nbsp;{{ Auth::user()->last_name }}<span class = "caret"></span>
                    </a>
                    <ul class = "dropdown-menu" role = "menu">
                    <li>
                      <a href="{{ route('auth.logout') }}">Finalizar Sesión</a>
                    </li>
                    </ul>
                  </li> 
              </div>
              </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    
    </header><!--/header-->


