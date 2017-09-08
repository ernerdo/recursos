@extends('layouts.logyreg')
@section('pageTitle', 'Recupera Contraseña')
@section('content')
<div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-content">
                    <h3 class="text-center">Recuperar tu contraseña</h3>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-group label-floating{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Correo Electrónico</label>
                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Enviar enlace de recuperación
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@stop
