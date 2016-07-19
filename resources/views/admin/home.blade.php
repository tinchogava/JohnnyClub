@extends ('admin.template')

@section('content')

	<div class = "container text-center">
		<div class = "page-header">
			<h1><i class = fa fa-rocket></i>Johnny Club - DASHBOARD</h1>
		</div>

		<h2>Bienvenido al Panel de administración de Johnny Club</h2><hr>

		<div class = "row">
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-list-alt icon-home"></i>
					<a href="{{ route ('admin.category.index') }}" class = "btn btn-warning btn-block btn-home-admin">CATEGORIAS</a>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-shopping-cart icon-home"></i>
					<a href="#" class = "btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-credit-card icon-home"></i>
					<a href="#" class = "btn btn-warning btn-block btn-home-admin">PEDIDOS</a>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-glass icon-home"></i>
					<a href="#" class = "btn btn-warning btn-block btn-home-admin">VARIETALES</a>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-industry icon-home"></i>
					<a href="#" class = "btn btn-warning btn-block btn-home-admin">BODEGAS</a>
				</div>
			</div>
			<div class = "col-md-6">
				<div class = "panel">
					<i class = "fa fa-users icon-home"></i>
					<a href="#" class = "btn btn-warning btn-block btn-home-admin">USUARIOS</a>
				</div>
			</div>
		</div>
	</div>
@stop