@extends('layouts.dash')

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
    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <div class="col-md-12">
                    <p class="well lead">Registro de Colaborador</p>
                    <div class="container">
                        <div class="row"> <!-- div da esquerda -->
                            <!-- Text input CNPJ e Razao Social-->
                            <div class="col-sm-8 contact-form"> <!-- div da direita -->
                                <form id="contact" method="POST" class="form" action="{{ url('crear_empleado') }}" role="form">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xs-6 col-md-3 form-group">
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
                                            <button class="btn btn-primary pull-right" type="submit">Agregar</button>

                                            <!--<button class="btn btn-primary pull-right" type="submit">Enviar</button>-->
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- fim div da direita -->
                        </div> <!-- fim div da esquerda -->
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
