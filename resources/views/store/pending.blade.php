@extends('templates.template')

@section('content')
	<div class = "container text-center">
		<div class = "page-header">
			<div class="jumbotron">
			  <h1>Johnny Club</h1>
			  <i class = "fa fa-clock-o fa-4x"></i>
			  <br><br>
			  <div class="alert alert-dismissible alert-warning">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <h4>Su pago fue registrado como pendiente</h4>
			  <p>Deberá realizar el pago del pedido para proceder con el envío.</p>
			</div>
			  <p><a class="btn btn-primary btn-lg" href="{{ route('home')}}">Volver al Home</a></p>
			</div>
			
			
		</div>
	</div>


@stop