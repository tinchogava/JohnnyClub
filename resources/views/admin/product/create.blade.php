@extends('admin.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<h1>
				<i class = "fa fa-shopping-cart "></i>
				PRODUCTOS <br> <small>[Agregar Producto]</small>
			</h1>
		</div>
		<div class= "row">
			<div class = "col-md-offset-3 col-md-6">
				<div class = "page">
					@if (count($errors) > 0)
						@include('admin.partials.errors')
					@endif
					{!! 
						Form::open(['route' => 'admin.product.store'])
					!!}

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
						<label for = "description">Descripción:</label>
						{!!
							Form::textarea(
								'description',
								null,
								array(
									'class' => 'form-control'
								)
							)
						!!}
					</div>
					<div class = "form-group">
						<label for = "size">Tamaño:</label>
						{!!
							Form::number(
								'size',
								null, 
								array(
									'class' => 'form-control', 
									'placeholder' => 'Tamaño del recipiente en cc'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "price">Precio:</label>
						{!!
							Form::number(
								'price',
								null, 
								array(
									'class' => 'form-control', 
									'placeholder' => 'Ingrese el precio'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "image">URL de la imagen:</label>
						{!!
							Form::text(
								'image',
								null,
								array(
									'class' => 'form-control',
									'placeholder' => 'Ingresa la url de la imagen...'
								)
							)
						!!}	
					</div>

					<div class = "form-group">
						<label for = "varietal_id">Varietal:</label>
						{!!
							Form::select(
							'varietal_id',
							$varietals,
							 null,
							 array(
									'class' => 'form-control',
									'placeholder' => 'Elija el Varietal...'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "category_id">Categoría:</label>
						{!!
							Form::select(
							'category_id',
							$categories,
							 null,
							 array(
									'class' => 'form-control',
									'placeholder' => 'Elija una Categoría...'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "winery_id">Bodega:</label>
						{!!
							Form::select(
							'winery_id',
							$wineries,
							 null,
							 array(
									'class' => 'form-control',
									'placeholder' => 'Elija la Bodega de Origen...'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "visible"> Stock:</label>
						{!!
							Form::select(
							'visible',
							 array(
							 	'1' => 'Si',
							 	'0' => 'No'),
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
						<a href="{{ route('admin.category.index') }}" class = "btn btn-warning">Cancelar</a>
					</div>

					{!!
						Form::close()
					!!}
				</div>
			</div>
		</div>
	</div>

@stop