<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('img/logo.png') }}"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Registro de Empleados</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!--  Material Dashboard CSS  -->
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">
	<div class="sidebar" data-color="red" data-image="{{asset('img/sidebar-4.jpg') }}">
		<!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

		<div class="logo">
			<a href="{{ asset('home') }}">
				<img src="{{asset('img/logoalvia.png') }}" class="img-responsive" alt="">
			</a>
		</div>

		<div class="sidebar-wrapper">
			<ul class="nav">
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
			</ul>
		</div>
	</div>
    @yield('content')
</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>


	<!--  Notifications Plugin    -->>
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
