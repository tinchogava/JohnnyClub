@extends('admin.template')

@section('content')

	<div class = "container text-center">
		<div class ="page-header">
			<h1>
				<i class = "fa fa-shopping-cart"></i>
				PRODUCTOS<br>
			</h1>
			<a href="{{ route('admin.product.create') }}" class ="btn btn-warning"><i class = "fa fa-plus-circle"></i> Producto</a>
		</div>
		<div class = "page">
			<div class = "table-responsive">
				<table class ="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Tamaño</th>
							<th>Precio</th>
							<th>Imagen</th>
							<th>Stock</th>
							<th>Categoría</th>
							<th>Varietal</th>
							<th>Bodega</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td>{{ $product->name }}</td>
						<td>{{ $product->description }}</td>
						<td>{{ $product->size }} cc</td>
						<td>${{ number_format($product->price, 2) }}</td>
						<td><img class = "product-list" src="{{ asset($product->image) }}"></td>
						<td>
							{!!  Form::model($product, array('route' => array('admin.product.update', $product))) !!} 
							<input type = "hidden" name = "_method" value = "PUT">
										{!!
											Form::select(
											'visible',
											 array(
											 	'1' => 'Si',
											 	'0' => 'No'),
											 $product->visible,
											 array(
													'class' => 'form-control',
													'onChange' => 'this.form.submit()'
												)
											)
										!!}
										{!! Form::close() !!}
						</td>
						<td>{{ $product->category->name }}</td>
						<td>{{ $product->varietal->name }}</td>
						<td>{{ $product->winery->name }}</td>
						<td>
							<a href="{{ route('admin.product.edit', $product) }}" class = "btn btn-info">
								<i class ="fa fa-pencil-square"></i>
							</a>
						</td>
						<td>
							{!! Form::open(['route' => ['admin.product.destroy', $product]]) !!}
				       		<input type="hidden" name="_method" value="DELETE">
				       		<button onClick="return confirm('Seguro que desea eliminar el producto {{ $product->name }}?')" class="btn btn-danger">
				       			<i class="fa fa-trash-o"></i>
				       		</button>
				        	{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
				{!! 
					$products->render() 
				!!}
			</div>
		</div>
	</div>
@stop