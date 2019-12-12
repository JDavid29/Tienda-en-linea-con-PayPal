@extends('store.template')

@section('content')
	<!--ESTE EL DETALLE DEL MODELO 3D PARA EL CARRITO DE COMPRAS	-->
	<h1>Detalle del modelo 3D</h1>

	<div class="producto-block">
		<img src="{{ $producto->imagen }}" width="300">
	</div>

	<div class="producto-block">
		<h3>{{ $producto->nombre }}</h3>	<hr>
		<div class="{{ $producto->infor }}">
			<p>{{ $producto->descripcion }}</p>
			<p>Precio: ${{ number_format($producto->precio,2) }}</p>
			<p>
				<a href="#">Lo Compro</a>
			</p>
		</div>

	</div>

	<p><a href="{{ route('home')}}" >Regresar</a></p>

@stop