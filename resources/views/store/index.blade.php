@extends('store.template')

@section('content')
@include('store.partials.slider')

<div class="container text-center">
	<div id="productos">
		<!--<h1>Listado de productos</h1>-->		<!---->
		@foreach($productos as $producto)

		<div class="producto white-panel">
			<h3>{{ $producto->nombre}}</h3>			<hr>
			<img src="{{ $producto->imagen}}" width="250">

			<div class="producto-infor panel">
				<p>{{ $producto->extracto }}</p>
				<!--VVVVVVVVVVVVVVVVVVVVVV   NO FUNCIONO LABEL V  	VVVVVVVVV-->
				<h3><span class="label label-success">Precio: ${{ number_format($producto->precio,2) }}</span></h3>
				<p>
					<a class="btn btn-warning" href=" {{route('cart-add', $producto->ficha)}} ">
						<i class="fa fa-cart-plus"></i>Lo Compro
					</a>
					<a class="btn btn-primary" href="{{ route('producto-detalle', $producto->ficha) }}"><i class="fa fa-chevron-circle-right"></i>Leer mas</a>
				</p>
			</div>

		</div>

		@endforeach

	</div>
</div>

@stop