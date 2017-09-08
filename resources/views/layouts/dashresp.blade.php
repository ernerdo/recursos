<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('img/logo.png') }}"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Registro de Empleados</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Material Dashboard CSS -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">

    <!-- Fonts and icons -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper"> <!--DIV DE INICIAL-->
    <div class="sidebar" data-color="red" data-image="{{asset('img/sidebar-4.jpg') }}"> <!--DIV DE BARRA LATERAL-->
        <div class="logo"> <!--DIV PARA ACOMODAR LOGO EN LATERAL-->
            <a href="{{ asset('home') }}"> <!--REDIRECCION A HOME-->
                <img src="{{asset('img/logoalvia.png') }}" class="img-responsive" alt="">
			</a> <!--CIERRE DE REDIRECCION A HOME-->
		</div> <!--CIERRE DIV PARA ACOMODAR LOGO EN LATERAL-->

		<div class="sidebar-wrapper"> <!--DIV DE MENU LATERAL-->
			<ul class="nav"> <!--LISTA DESORDENADA-->
				<li class="active">
					<a href="{{ asset('home') }}">
						<i class="material-icons">home</i>
						<p>Inicio</p>
					</a>
				</li>
				<li>
					<a href="{{ url('/catempleado') }}">
						<i class="material-icons">people</i>
						<p>Registrar Colaborador</p>
					</a>
				</li>
				<li>
					<a href="{{ url('/list') }}">
						<i class="material-icons">folder_shared</i>
						<p>Lista de Colaboradores</p>
					</a>
				</li>
			</ul> <!--CIERRE DE LISTA DESORDENADA-->
		</div> <!--CIERRE DE DIV DE MENU LATERAL-->
	</div> <!--CIERRE DE DIV DE BARRA LATERAL-->

    <div class="main-panel"> <!--Panel Central-->
        @yield('content') <!--Llamado a la Vista Lista y Agregar, segun click en Anchor-->
        <footer class="footer">
            <div class="container-fluid"> <!--DIV DE CONTENEDOR-->
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>
                    Powered By IT
                    <a href="http://alviacomercial.com">
                        Alvia Comercial
                    </a>
                </p>
            </div><!--CIERRE DIV DE CONTENEDOR-->
        </footer>
    </div><!--Cierre de Panel Central-->

</div><!--CIERRE DE DIV INICIAL-->

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>


	<!--  Notifications Plugin    -->
	<script src="{{asset('js/bootstrap-notify.js')}}"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{asset('js/material-dashboard.js')}}"></script>


<script src="{{ asset('js/toastr.js') }}"></script>
<script>
			@if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
	@endif
</script>
</html>
