@extends('templates.template')

@section('content')

<div class ="container text-center">
	<div class ="page-header">
		<h1>{{ $product->name }}</h1>
	</div>
	<div class ="row">
		<div class ="col-md-6">
			<div class ="product-block">
				<img src="{{ asset($product->image) }}">
			</div>
		</div>
		<div class ="col-md-6">
			<div class ="product-block">
				<h3>{{ $product->name}}</h3><hr>
					<div class ="product-info panel">
						<p>{{$product->description}}</p>
						<h3>
							<span class ="label label-success">Precio: $ {{ number_format($product->price,2)}}</span>
						</h3>
						<p>
							<a class ="btn btn-warning btn-block" href="{{route('cart-add', $product->id)}}">
								Comprar
								<i class ="fa fa-cart-plus fa-2x"></i>
							</a>
						</p>
					</div>
			</div>
		</div>
	</div><hr>		

	<h3><i class ="fa fa-glass"></i> Detalle del Producto</h3>

<div class="table-responsive ">
				<table class="table table-striped table-hover">
					<tbody align ="center">
							<tr> 
								<td>Ver Cartilla</td><td>
							<a class ="btn btn-info btn-sm" href="{{route('primer-tasting', $product->id)}}">
								<i class ="fa fa-file-text"></i>
							</a>
						</td>
							</tr>
							<tr> 
								<td>Tamaño</td><td>{{ $product->size }} cc</td>
							</tr>
							<tr> 
								<td>Varietal</td><td>{{ $product->varietal->name }}</td>
							</tr>
							<tr> 
								<td>Categoría</td><td>{{ $product->category->name }}</td>
							</tr>
							<tr> 
								<td>Bodega</td><td>{{ $product->winery->name }}</td>
							</tr>
							<tr> 
								<td>Ciudad</td><td>{{ $product->winery->city->name }}</td>
							</tr>
							<tr> 
								<td>Provincia</td><td>{{ $product->winery->state->name }}</td>
							</tr>
							<tr> 
								<td>Bodega</td><td>{{ $product->winery->country->name }}</td>
							</tr>
					</tbody>
				</table>
</div>



<p>
	<a class ="btn btn-primary" href="{{route('home')}}">
		<i class ="fa fa-chevron-circle-left"></i>Regresar
	</a>
</p>
</div>

@stop