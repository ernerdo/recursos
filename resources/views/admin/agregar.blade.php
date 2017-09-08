@extends('layouts.dashresp')

@section('pageTitle', 'Registrar Colaborador') <!--Para colocar el titulo-->

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <!-- Contenido central para registrar un nuevo empleado -->

            <nav class="navbar navbar-transparent navbar-absolute"> <!-- Barra de navegación con funciones de menu -->

                <div class="container-fluid"> <!--Contenedor ajustado de la Navbar-->

                    <div class="navbar-header"> <!--Barra de Navegacion Responsive Izquierda-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"> <!--Boton para descubrir la sidebar-->
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> <!--Cierre de Boton para descubrir la sidebar-->
                        <a class="navbar-brand" href="{{ url('/catempleado') }}">Registrar Colaborador</a>
                    </div> <!-- Cierre de Barra de Navegacion Responsive Izquierda-->

                    <div class="collapse navbar-collapse"> <!--Menu para cierre de sesión-->
                        <ul class="nav navbar-nav navbar-right"> <!--Lista para agregar mas opciones en dropdown-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                           Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- Cierre Lista para agregar mas opciones en dropdown-->

                    </div> <!--Cierre de Menu para cierre de sesión-->

                </div> <!--Cierre de Contenedor ajustado de la Navbar-->

            </nav> <!--Cierre de Barra de navegación con funciones de menu-->

        <div class="content">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xs-12">
                    <div class="card">
                            <div class="card-content"> <!-- div da direita -->
                                <form id="contact" method="POST" class="form" action="{{ url('crear_empleado') }}" role="form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="">Cedula</label>
                                            <input class="form-control" id="cedula" name="cedula" placeholder="" type="text" required autofocus />
                                        </div>
                                    </div> <!-- fim row -->
                                    <!-- Text input endereco-->
                                    <div class="col-xs-4 col-md-12 form-group">
                                        <div class="controls">
                                            <label for="">Nombre Completo</label>
                                            <input class="form-control" id="nombre" name="nombre" placeholder=""  type="text" required>
                                        </div>
                                    </div><!--fim control-group-->
                                    <br> <!--pulando uma linha -->
                                    <!-- Text input cidade e estado-->
                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 form-group">
                                            <label for="">Fecha de Nacimiento</label>
                                            <input class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="" type="date" required />
                                        </div>
                                        <div class="col-xs-4 col-md-3 form-group">
                                            <label for="">Sucursal</label>
                                            <select class="form-control"id="sucursal-id" name="sucursal-id"  required>
                                                <option selected></option>
                                                @foreach($suc as $sucursal)
                                                    <option value={{$sucursal->id}}>{{$sucursal->sucursal}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-xs-6 col-md-3 form-group">
                                            <label for="">Fecha de Ingreso</label>
                                            <input class="form-control" id="fechaingreso" name="fechaingreso" placeholder="Telefone" type="date" required />
                                        </div>
                                    </div><!--fim Text input cidade e estado-->
                                    <br />

                                    <div class="row">
                                        <div class="col-xs-12 col-md-12 form-group">
                                            <button class="btn btn-primary pull-right" type="submit">Guardar</button>

                                        </div>
                                    </div>
                                </form>
                            </div> <!-- fim div da direita -->
                    </div>

                </div>
            </div>
            </div>
        </div>




@stop