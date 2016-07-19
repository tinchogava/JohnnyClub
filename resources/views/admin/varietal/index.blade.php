@extends('admin.template')

@section('content')

	<div class = "container text-center">
		<div class ="page-header">
			<h1>
				<i class = "fa fa-glass icon-home"></i>
				VARIETALES <a href="{{ route('admin.varietal.create') }}" class="btn btn-warning"><i class = "fa fa-plus-circle"> Varietal</i></a>
			</h1>
		</div>
		<div class = "table-responsive">
			<table class ="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Descripción</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($varietals as $varietal)
					<tr>
						<td>{{ $varietal->name }}</td>
						<td>{{ $varietal->description }}</td>
						<td>
							<a href="{{ route('admin.varietal.edit', $varietal) }}" class = "btn btn-primary">
								<i class ="fa fa-pencil-square"></i>
							</a>
						</td>
						<td>
							{!! Form::open(['route' => ['admin.varietal.destroy', $varietal]]) !!}
				       		<input type="hidden" name="_method" value="DELETE">
				       		<button onClick="return confirm('Seguro que desea eliminar el varietal {{ $varietal->name }}?')" class="btn btn-danger">
				       			<i class="fa fa-trash-o"></i>
				       		</button>
				        	{!! Form::close() !!}
				        </td>
				    </tr>
					@endforeach
				</tbody>
			</table>
			{!!
				$varietals->render()
			!!}
		</div>
	
@stop