	@extends('templates.template')

	@section('content')

	<div class="middlePage">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class = "panel-head">Inicia Sesión en Johnny Club</h3>
			</div>
			
			<div class="panel-body">

				<div class="row">
					<div class="col-md-6">
					</br>
						@include('store.partials.errors')
						<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
							{!! csrf_field() !!}

							<div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label">Nombre de Usuario</label>

								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" class="form-control" name="user" value="{{ old('user') }}">
									</div>

									@if ($errors->has('user'))
									<span class="help-block">
										<strong>{{ $errors->first('user') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label">Contraseña</label>

								<div class="col-md-4">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" class="form-control" name="password">
									</div>

									@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember"> Recordarme
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Ingresar <i class="fa fa-btn fa-sign-in"></i>
									</button>

									<a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
								</div>
							</div>
						</form>
					</div>

					<div class="col-md-6" style="border-left:1px solid #ccc;height:210px">
						<div class="col-xs-7 col-sm-3">
							<a href="redirect">
								<div class="facebook button">
									<i class="icon hidden-xs">
										<i class="fa fa-facebook-official"></i>
									</i>
									<div class="social-login">
										<p>
											facebook
										</p>
									</div>
								</div>
							</a>
						</div><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
						<div class="col-xs-7 col-sm-3">
							<a href="redirect">
								<div class="twitter button">
									<i class="icon hidden-xs">
										<i class="fa fa-twitter"></i>
									</i>
									<div class="social-login">
										<p>
											Twitter
										</p>
									</div>
								</div>
							</a>
						</div><br class="hidden-xs hidden-sm"><br class="hidden-xs hidden-sm">
						<div class="col-xs-7 col-sm-3">
							<a href="redirect">
								<div class="google button">
									<i class="icon hidden-xs">
										<i class="fa fa-google-plus"></i>
									</i>
									<div class="social-login">
										<p>
											Google +
										</p>
									</div>
								</div>
							</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	@stop