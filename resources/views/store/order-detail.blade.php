@extends('templates.template')

@section('content')
{!!
	Html::style('css/numberFormat.css')
!!}

	<div class = "container text-center">
		<div class ="page-header">
			<h1><i class ="fa fa-shopping cart"></i> Detalle del Pedido</h1>
		</div>

		<div class = "page">
			<div class = "table -responsive">
				<h3>Datos del usuario</h3>
				<table class ="table table-striped table-hover table-bordered">
					{!! 
						Form::open(array('route' => 'mercadoPago-checkout', 'name' => 'formOrderDetail'))
					!!}
					<tr><td>Nombre:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }} </td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }} </td></tr>
					<tr><td>E-mail: </td><td>{{ Auth::user()->email }} </td></tr>
					<tr><td>Dirección: </td><td>
	
						{{ Auth::user()->address }}, {{ Auth::user()->city->name}}, {{ Auth::user()->state->name }} </td></tr>
					<tr>
						<td colspan = "2">
							<label for = "changeAddress"> ¿Desea cambiar la dirección del envío?&nbsp;</label>
							<input type="checkbox" id = "changeAddress" class = "showContent">
								
						</td>
					</tr>
					<tr id = "content1" style="display: none;">
						<td><div id ="content2" style="display: none;"> Dirección:</div></td>
						<td>
							<div id ="content3" style="display: none;">
								{!!
									Form::text(
										'shippingAddress',
										null,
										array(
											'class' => 'form-control',
											'autofocus' => 'autofocus'
										)
									)
								!!}
							</div>
						</td>
					</tr>
					<tr id = "content4" style="display: none;">
						<td><div id ="content5" style="display: none;"> Código Postal:</div></td>
						<td>
							<div id ="content6" style="display: none;">
								{!!
									Form::number(
										'zip_code',
										null,
										array(
											'class' => 'form-control'
										)
									)
								!!}
							</div>
						</td>
					</tr>	
				</table>
			</div>
				<div class ="table-responsive">
					<h3>Datos del Pedido</h3>
					<table class ="table table-striped table-hover table-bordered">
						<tr class = "info">
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
						</tr>
						@foreach($cart as $item)
							<tr>
								<td>{{ $item->name }}</td>
								<td>{{ number_format($item->price, 2) }} </td>
								<td>{{ $item->quantity }} </td>
								<td>{{ number_format($item->price * $item->quantity, 2) }}</td>
						@endforeach
					</table>
					<h3><hr>
						<span class ="label label-success">
							Total: ${{ number_format($total, 2) }}
						</span>
					</h3></hr>
					<p>
						<a href = "{{ route('cart-show') }}" class ="btn btn-primary">
							<i class = "fa fa-chevron-circle-left fa-2x"></i>&nbsp; Regresar
						</a>
						<a href = "{{ route('mercadoPago-checkout') }}" id = "MP-checkout" class ="btn btn-warning">
							</i> Checkout &nbsp;<i class = "fa fa-check-square-o fa-2x"></i>
						</a>


					</div>
			</div>
			</div>
		</div>
	</div>
@stop
