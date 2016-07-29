@extends('admin.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<h1>
				<i class = "fa fa-shopping-cart "></i>
				PRODUCTOS <br> <small>[Editar Producto]</small>
			</h1>
		</div>
		<div class= "row">
			<div class = "col-md-offset-3 col-md-6">
				<div class = "page">
					@if (count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!!
						Form::model($product, array('route' => array('admin.product.update', $product->id)))
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
									'class' => 'form-control'
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
						<label for = "image">Imagen actual:</label>
						<img class = "product-list" src="{{ asset($product->image) }}">

					</div>
					<div class = "form-group">
						<label for = "showContent"> Desea cambiar la Imagen?</label>
						{!!
							Form::checkbox(
								'showContent',
								null,
								false,
								array(
									'class' => 'showContent',
									'id' => 'showContent'
								)
							)
						!!}
					</div>

					<div id = "content1" style="display: none;" class = "form-group">
						<label  id = "content2" style="display: none;" for = "image">Nueva Imagen:</label>
					  	<div  id = "content3" style="display: none;" class="input-group">
					    	<span  id = "content4" style="display: none;" class="input-group-addon"><i class = "fa fa-file-image-o"></i></span>
							
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

						<a href="{{route('primer-tasting', $product->id)}}" class = "btn btn-info">
									Ver Cartilla
								</a>
					</div>

					<div class = "form-group">
						<label for = "showContent2"> Desea cambiar la Cartilla?</label>
						{!!
							Form::checkbox(
								'showContent2',
								null,
								false,
								array(
									'class' => 'showContent2',
									'id' => 'showContent2'
								)
							)
						!!}
					</div>

					<div id = "2content1" style="display: none;" class = "form-group">
						<label id = "2content2" style="display: none;" for = "description_file">Nueva Cartilla:</label>
					  	<div id = "2content3" style="display: none;" class="input-group">
					    	<span id = "2content4" style="display: none;" class="input-group-addon"><i class = "fa fa-file-pdf-o"></i></span>
							
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
									'class' => 'form-control'
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
									'class' => 'form-control'
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
									'class' => 'form-control'
								)
							)
						!!}
					</div>

					<div class = "form-group">
						<label for = "visible"> Visible:</label>
						{!!
							Form::checkbox(
								'visible',
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