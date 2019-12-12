@extends('store.template')

@section('content')

	<div class="productos">
		<!--<h1>Listado de productos</h1>-->		<!---->
		@foreach($productos as $producto)

		<div class="producto">
			<h3>{{ $producto->nombre}}</h3>
			<img src="{{ $producto->imagen}}" width="250">

			<div class="producto-infor">
				<p>{{ $producto->extracto }}</p>
				<p>Precio: ${{ number_format($producto->precio,2) }}</p>
				<p>
					<a href="#">Lo Compro</a>
					<a href="{{ route('producto-detalle', $producto->ficha) }}">Leer mas</a>
				</p>
			</div>

		</div>

		@endforeach

	</div>


@stop