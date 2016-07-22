@extends('admin.template')

@section('content')

	<div class = "container text-center">
		<div class ="page-header">
			<h1>
				<i class = "fa-fa-users"></i>
				Usuarios <a href="{{ route('admin.user.create') }}" class="btn btn-warning"><i class = "fa fa-plus-circle"> Usuario</i></a>
			</h1>
		</div>
		<div class = "page">
			<div class = "table-responsive">
				<table class ="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>E-Mail</th>
							<th>Usuario</th>
							<th>Tipo</th>
							<th>Activo</th>
							<th>Direccion</th>
							<th>Ciudad</th>
							<th>Provincia</th>
							<th>País</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
				<tbody>
	@foreach($users as $user)
	<tr>
		<td>{{ $user->name }}</td>
		<td>{{ $user->last_name }}</td>
		<td>{{ $user->email }}</td>
		<td>{{ $user->user }}</td>
		<td>{{ $user->type }}</td>
		<td>
			{!!  Form::model($user, array('route' => array('admin.user.update', $user))) !!} 
			<input type = "hidden" name = "_method" value = "PUT">
						{!!
							Form::select(
							'active',
							 array(
							 	'1' => 'Si',
							 	'0' => 'No'),
							 $user->type,
							 array(
									'class' => 'form-control',
									'onChange' => 'this.form.submit()'
								)
							)
						!!}
						{!! Form::close() !!}
		</td>
		<td>{{ $user->address }}</td>
		<td>{{ $user->city->name }}</td>
		<td>{{ $user->state->name }}</td>
		<td>{{ $user->country->name }}</td>
		<td>
			<a href="{{ route('admin.user.edit', $user) }}" class = "btn btn-primary">
				<i class ="fa fa-pencil-square"></i>
			</a>
		</td>
		<td>
			{!! Form::open(['route' => ['admin.user.destroy', $user]]) !!}
       		<input type="hidden" name="_method" value="DELETE">
       		<button onClick="return confirm('Seguro que desea eliminar el usuario {{ $user->name }}?')" class="btn btn-danger">
       			<i class="fa fa-trash-o"></i>
       		</button>
        	{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</tbody>
	</table>
	{!! 
		$users->render() 
	!!}
			</div>
		</div>
@stop