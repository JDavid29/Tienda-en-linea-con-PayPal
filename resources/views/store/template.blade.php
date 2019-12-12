<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'My Laravel Store')</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-iqcNtN3rj6Y1HX/R0a3zu3ngmbdwEa9qQGHdkXwSRoiE+Gj71p0UNDSm99LcXiXV" crossorigin="anonymous">	<!--ESTILO -DE TEMA-- DE BOSTRAP CDN ELEGIDO-->

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<style type="text/css">.fa_custom {
		color: #FEFCFC
	}
	</style>

	<!--ESTILOS `PARA EL FOOTER CON BOOSTRAP-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
</head>
<body>
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	<!--SACADO DE JQUERY--><!----><!----><!---->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>