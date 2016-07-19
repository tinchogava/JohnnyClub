@extends('admin.template')

@section('content')

	<div class = "container text-center">
		<div class ="page-header">
			<h1>
				<i class = "fa fa-list-alt"></i>
				CATEGORÍAS <br>
				<a href="{{ route('admin.category.create') }}" class="btn btn-warning"><i class = "fa fa-plus-circle"> Categoría</i></a>
			</h1>
		</div>
			<div class = "page">
				<div class = "table-responsive">
					<table class ="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Descripción</th>
								<th>Color</th>
								<th>Editar</th>
								<th>Eliminar</th>
							</tr>
						</thead>
						<tbody>
						@foreach($categories as $category)
							<tr>
								<td>{{ $category->name }}</td>
								<td>{{ $category->description }}</td>
								<td><input type ="color" value = "{{ $category->color }}" disabled = "disabled"></td>
								<td>
									<a href="{{ route('admin.category.edit', $category) }}" class = "btn btn-primary">
										<i class ="fa fa-pencil-square">
										</i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['admin.category.destroy', $category]]) !!}
        								<input type="hidden" name="_method" value="DELETE">
        								<button onClick="return confirm('Seguro que desea eliminar la categoría {{ $category->name }}?')" class="btn btn-danger">
        									<i class="fa fa-trash-o"></i>
        								</button>
        							{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					{!!
						$categories->render()
					!!}
				</div>
			</div>
@stop