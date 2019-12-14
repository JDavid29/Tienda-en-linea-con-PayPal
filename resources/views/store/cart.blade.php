@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Carrito de compras</h1>
		</div>	<hr>

		<div class="table-cart">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<caption>table title and/or explanatory text</caption>
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantida</th>
						<th>Subtotal</th>
						<th>Quitar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($cart as $item)
						<tr>
							<td><img src="{{ $item->imagen}}"></td>
							<td>{{ $item->nombre }}</td>
							<td>{{ number_format($item->precio,2) }}</td>
							<td>{{ $item->quantity }}</td>
							<td>{{ number_format($item->precio * $item->quantity,2) }}</td>
							<td>
								<a href="#" class="btn btn-danger">
									<i class="fa fa-remove"></i>
								</a>
							</td>
						</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

	</div>
@stop