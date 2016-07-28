@extends('admin.template')

@section('content')
{!!
	Html::style('css/numberFormat.css')
!!}
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
						Form::open(['route' => 'admin.product.store','method' => 'POST',  'files' => true, 
							'enctype' => 'multipart/form-data', 'class' => 'form-horizontal'])
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

					<div class="form-group">
					 	<label for = "price">Precio:</label>
					  	<div class="input-group">
					    	<span class="input-group-addon">$</span>
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
					</div>

					<div class = "form-group">
						<label for = "image">Imagen:</label>
					  	<div class="input-group">
					    	<span class="input-group-addon"><i class = "fa fa-file-image-o"></i></span>
							
							{!!
								Form::file(
									'image',
									array(
										'class' => 'form-control'
										)
									)
							!!}	
						</div>
					</div>

					<div class = "form-group">
						<label for = "description_file">Cartilla:</label>
					  	<div class="input-group">
					    	<span class="input-group-addon"><i class = "fa fa-file-pdf-o"></i></span>
							
							{!!
								Form::file(
									'description_file',
									array(
										'class' => 'form-control'
										)
									)
							!!}	
						</div>
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
						<label for = "visible"> Visible:</label>
						{!!
							Form::checkbox(
							'visible',
							 null
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
						<a href="{{ route('admin.product.index') }}" class = "btn btn-warning">Cancelar</a>
					</div>

					{!!
						Form::close()
					!!}
				</div>
			</div>
		</div>
	</div>

@stop