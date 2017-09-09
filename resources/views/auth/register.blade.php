@extends('layouts.logyreg')
@section('pageTitle', 'Registrarse')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="card">
                    <h3 class="text-center">Registrarse</h3>
                    <div class="card-content">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group label-floating {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">
                                    Nombre Completo
                                </label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">
                                    Correo Electrónico
                                </label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">
                                    Contraseña
                                </label>
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group label-floating">
                                <label for="password-confirm" class="control-label">
                                    Confirmar Contraseña
                                </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-success outline btn-block">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer text-center">
                        <a href="{{ route('login') }}">
                            ¿Tienes Cuenta? Inicia Sesión
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
