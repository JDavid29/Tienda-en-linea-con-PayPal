@extends('store.template')

@section('content')
<div class="container text-center">
	<!--ESTE EL DETALLE DEL MODELO 3D PARA EL CARRITO DE COMPRAS	-->
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i> Detalle del modelo 3D</h1>
	</div>
	<!--<h1>Detalle del modelo 3D</h1>-->
	<div class="row">
		<div class="col-md-6">
			<div class="producto-block">
				<img src="{{ $producto->imagen }}" >
			</div>
		</div>
		<div class="col-md-6">
			<div class="producto-block">
				<h3>{{ $producto->nombre }}</h3>	<hr>
				<div class="$producto->infor panel">
					<p>{{ $producto->descripcion }}</p>
					<h3>
						<span class="label label-success">Precio: ${{ number_format($producto->precio,2) }}</span>
					</h3>
					<p>
						<a class="btn btn-warning btn-block" href="#">
							Lo Compro<i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>
				</div>

			</div>
		</div>

	</div>		<hr><!--AÑADIMOS UN SEPARADOR DE LINEA-->

	<p>
		<a class="btn btn-primary" href="{{ route('home')}}" >
			<i class="fa fa-chevron-circle-left">Regresar</i>
		</a>
	</p>
</div>
@stop