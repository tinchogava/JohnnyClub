@if(Auth::check())
	<li class="dropdown">
        <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs"></i>
              <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
        	<li>
            	<a href="#"><i class ="fa fa-user"></i>&nbsp;Perfil</a>
            </li>
            <li>
            	<a href="#"><i class ="fa fa-shopping-cart"></i>&nbsp;Mis Compras</a>
            </li>
            <li>
            	<a href="{{ route('auth.logout') }}"><i class ="fa fa-sign-out"></i>&nbsp;Cerrar Sesión</a>
            </li>
        </ul>
    </li>
@else
    <li class="dropdown">
        <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-sign-in"></i>
              <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
            <li>
            	<a href="{{ route('auth.login') }}"><i class ="fa fa-sign-in"></i>&nbsp;Iniciar Sesión</a>
            </li>
            <li>
            	<a href="{{ route('auth.register') }}"><i class ="fa fa-check-square-o"></i>&nbsp;Registrarse</a>
            </li>
        </ul>
    </li>
@endif


