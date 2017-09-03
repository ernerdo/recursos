@extends('layouts.dash')

@section('content')

    <section class="container" id="contenido_principal">

        <div class="col-md-8 col-md-offset-2">

            <div class="box-header">


            </div>


            <div class="box-body box-white">

                <div class="table-responsive">

                    <table class="table table-hover table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>codigo</th>
                            <th>Nombre</th>
                            <th>Cedula</th>
                            <th>Fecha Ingreso</th>
                            <th>Sucursal</th>
                            <th>Fecha Cumple</th>
                            <th>Estado</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($empleados as $empleado)
                            <tr role="row" class="odd">
                                <td>{{ $empleado->id }}</td>
                                <td class="mailbox-messages mailbox-name"><a href="javascript:void(0);"
                                                                             style="display:block"><i
                                                class="fa fa-user"></i>&nbsp;&nbsp;{{ $empleado->nombre  }}</a></td>
                                <td>{{ $empleado->cedula }}</td>
                                <td> {{ Carbon\Carbon::parse($empleado->fechaingreso)->format('d-m-Y')}}  </td>
                                <td> {{ $empleado->sucursal->sucursal }}   </td>
                                <td> {{ Carbon\Carbon::parse($empleado->fechacumple)->format('d-m-Y')}}  </td>
                                <td> {{ $empleado->estado->estado }}   </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>

            {{ $empleados->links() }}




        </div>
    </section>



@endsection
