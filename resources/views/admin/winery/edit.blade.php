@extends('admin.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<h1>
				<i class = "fa fa-list-alt "></i>
				BODEGAS <br> <small>[Editar Bodega]</small>
			</h1>
		</div>
		<div class= "row">
			<div class = "col-md-offset-3 col-md-6">
				<div class = "page">
					@if (count($errors) > 0)
						@include('admin.partials.errors')
					@endif
					{!!
						Form::model($winery, array('route' => array('admin.winery.update', $winery)))
					!!}

					<input type = "hidden" name = "_method" value = "PUT">

					<div class = "form-group">
						<label for = "name"> Nombre:</label>
						{!!
							Form::text(
								'name',
								null,
								array(
									'class' => 'form-control',
									'placeholder' => 'Ingresa el nombre...',
									'autofocus' => 'autofocus'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "address">Dirección:</label>
						{!!
							Form::text(
								'address',
								null,
								array(
									'class' => 'form-control'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "city"> Localidad:</label>
						{!!
							Form::select(
							'city_id',
							 $cities,
							 null,
							 array(
									'class' => 'form-control',
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "state"> Provincia:</label>
						{!!
							Form::select(
							'state_id',
							 $states,
							 null,
							 array(
									'class' => 'form-control',
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "country"> País:</label>
						{!!
							Form::select(
							'country_id',
							 $countries,
							 null,
							 array(
									'class' => 'form-control',
								)
							)
						!!}
					</div>

					<div class = "form-group">
						{!!
							Form::submit(
								'Guardar',
								array(
									'class' => 'btn btn-primary',
								)
							)
						!!}
						<a href="{{ route('admin.winery.index') }}" class = "btn btn-warning">Cancelar</a>
					</div>

					{!!
						Form::close()
					!!}
				</div>
			</div>
		</div>
	</div>

@stop