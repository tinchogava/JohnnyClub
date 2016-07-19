@inject('wineries', 'App\Http\Controllers\WineryController')
@inject('categories', 'App\Http\Controllers\CategoryController')
@inject('varietals', 'App\Http\Controllers\VarietalController')

<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="#" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                       <li class="active"><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('products-index') }}">Productos</a></li>
          <a href="{{ route('categories-index') }}">
          <li class="dropdown">
            <a href="{{ route('categories-index') }}" class="dropdown-toggle" data-toggle="dropdown">
              Categorías
              <i class="fa fa-angle-down"></i>
            </a>
          </a>
            <ul class="dropdown-menu">
              @foreach($categories->getAll() as $category)
                 <li><a href="{{ route('home') }}">{{ $category->name}}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="dropdown">
            <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">
              Bodegas 
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach($wineries->getAll() as $winery)
                <li><a href="{{ route('home') }}">{{ $winery->name}}</a></li>
              @endforeach
            </ul>
          </li>
           <li class="dropdown">
            <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown">
              Varietales 
              <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach($varietals->getAll() as $varietal)
                <li><a href="{{ route('home') }}">{{ $varietal->name }}</a></li>
              @endforeach
            </ul>
          </li>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->


