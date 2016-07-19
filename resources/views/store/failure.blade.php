@extends('admin.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<i class = "fa fa-times-circle fa-4x"></i>
			{!!
				Form::label(
					'confirm',
					'Su pago fue rechazado',
					array(
						'class' => 'awesome'
						)
					)
				!!}
		</div>
	</div>


@stop