@extends('templates.template')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Ingresar a Johnny Club
            </div>
            <div class="panel-body">
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

               <div class = "row omb_row-sm-offset-3">
                    <div class="omb_login">
                        <div class="row omb_row-sm-offset-3 omb_loginOr">
                            <div class="col-xs-12 col-sm-6">
                                <hr class="omb_hrOr">
                                <span class="omb_spanOr">o</span>
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a href="redirect">
                                <div class="facebook button">
                                    <i class="icon">
                                        <i class="fa fa-facebook-official"></i>
                                    </i>
                                    <div class="social-login">
                                        <p>
                                            facebook
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a href="redirect">
                                <div class="twitter button">
                                    <i class="icon">
                                        <i class="fa fa-twitter"></i>
                                    </i>
                                    <div class="social-login">
                                        <p>
                                            Twitter
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-3">
                            <a href="redirect">
                                <div class="google button">
                                    <i class="icon">
                                        <i class="fa fa-google-plus"></i>
                                    </i>
                                    <div class="slide">
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
</div>
@stop


