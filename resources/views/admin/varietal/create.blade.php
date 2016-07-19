@extends('admin.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<h1>
				<i class = "fa fa-list-alt "></i>
				VARIETALES <br> <small>[Agregar Varietal]</small>
			</h1>
		</div>
		<div class= "row">
			<div class = "col-md-offset-3 col-md-6">
				<div class = "page">
					@if (count($errors) > 0)
						@include('admin.partials.errors')
					@endif
					{!! 
						Form::open(['route' => 'admin.varietal.store'])
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
						{!!
							Form::submit(
								'Guardar',
								array(
									'class' => 'btn btn-primary',
								)
							)
						!!}
						<a href="{{ route('admin.varietal.index') }}" class = "btn btn-warning">Cancelar</a>
					</div>

					{!!
						Form::close()
					!!}
				</div>
			</div>
		</div>
	</div>

@stop