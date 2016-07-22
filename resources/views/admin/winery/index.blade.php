@extends('admin.template')

@section('content')

	<div class = "container text-center">
		<div class ="page-header">
			<h1>
				<i class = "fa fa-shopping-cart"></i>
				BODEGAS <br>
			</h1>
			<a href="{{ route('admin.winery.create') }}" class="btn btn-warning"><i class = "fa fa-plus-circle"> Bodega</i></a>
		</div>
		<div class = "table-responsive">
			<table class ="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Dirección</th>
						<th>Localidad</th>
						<th>Provincia</th>
						<th>País</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($wineries as $winery)
						<tr>
							<td>{{ $winery->name }}</td>
							<td>{{ $winery->address }}</td>
							<td>{{ $winery->city->name }}</td>
							<td>{{ $winery->state->name }}</td>
							<td>{{ $winery->country->name }}</td>
							<td>
								<a href="{{ route('admin.winery.edit', $winery) }}" class = "btn btn-info">
									<i class ="fa fa-pencil-square"></i>
								</a>
							</td>
							<td>
								{!! Form::open(['route' => ['admin.winery.destroy', $winery]]) !!}
					       		<input type="hidden" name="_method" value="DELETE">
					       		<button onClick="return confirm('Seguro que desea eliminar la bodega {{ $winery->name }}?')" class="btn btn-danger">
					       			<i class="fa fa-trash-o"></i>
					       		</button>
					        	{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop