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
						<td class = "text-align: center">
							<a href="{{ route('admin.product.edit', $product) }}" class = "btn btn-info">
								<i class ="fa fa-pencil-square"></i>
							</a>
						</td>
						<td class = "text-align: center">
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
  <!-- Image Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h2 class="modal-title">Cambiar Imagen</h2>
        	</div>
        	<div class="modal-body">
        		{!!  Form::model($product, array('route' => array('admin.product.update', $product), 'files' => true)) !!} 
        		<input type = "hidden" name = "_method" value = "PUT">
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
	        	
        	</div>
        	<div class="modal-footer">
         	 	<button type="submit" class = "btn btn-primary"><i class = "fa fa-upload"  onClick = "this.form.submit()"></i> Subir</button>
         	 	{!!
	        		Form::close()
	        	!!}
        	</div>
      	</div>
    </div>
</div>

  <!-- File Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      	<div class="modal-content">
        	<div class="modal-header">
          		<button type="button" class="close" data-dismiss="modal">&times;</button>
          		<h2 class="modal-title">Cambiar Cartilla</h2>
        	</div>
        	<div class="modal-body">
        		{!!
        			Form::open(array('route' => array('admin.product.show', $product->id)))
        		!!}
        		<input type = "hidden" name = "_method" value = "PUT">
          		<input type = "file" name = "description_file">
          		
        	</div>
        	<div class="modal-footer">
         	 	<button type="submit" class = "btn btn-primary"><i class = "fa fa-upload" onClick = "this.form.submit()"></i>Subir</button>
          		{!!
          			Form::close()
          		!!}
        	</div>
      	</div>
    </div>
</div>

  





