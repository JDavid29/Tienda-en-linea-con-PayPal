@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page header">
			<h1><i class="fa fa-shopping-cart"></i>Detalle del pedido</h1>
		</div>

		<div class="page">
			<div class="table-responsive">
				<h3>Datos del Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre:</td><td>{{ Auth::user()->name ." " . Auth::user()->last_name }}</td></tr>
					<tr><td>Usuario:</td><td>{{ Auth::user()->user }}</td></tr>
					<tr><td>Correo:</td><td>{{ Auth::user()->email }}</td></tr>
					<tr><td>Direccion:</td><td>{{ Auth::user()->address }}</td></tr>
				</table>
			</div>

			<div class="table-responsive">
				<h3>Datos del pedido</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Subtotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->nombre}}</td>
							<td>{{ number_format($item->precio)}}</td>
							<td>{{ $item->quantity }}</td>
							<td>{{ number_format($item->precio * $item->quantity,2)}}</td>
						</tr>
					@endforeach
				</table>	<hr>
				<h3>
					<span class="label label-success">
						Total: ${{ number_format($total,2)}}
					</span>
				</h3>	<hr>
				<p>
					<a href="{{ route('cart-show')}}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					<!--<a href="{{ route('payment') }}" class="btn btn-warning">
						Pagar con <i class="fa fa-paypal fa-2x"></i>
					</a>-->

					<div id="paypal-button"></div>
		<script src="https://www.paypalobjects.com/api/checkout.js"></script>
		<script>
		  paypal.Button.render({
		    // Configure environment
		    env: 'sandbox',
		    client: {
		      sandbox: 'demo_sandbox_client_id',
		      production: 'demo_production_client_id'
		    },
		    // Customize button (optional)
		    locale: 'en_US',
		    style: {
		      size: 'small',
		      color: 'gold',
		      shape: 'pill',
		    },

		    // Enable Pay Now checkout flow (optional)
		    commit: true,

		    // Set up a payment
		    payment: function(data, actions) {
		      return actions.payment.create({
		        transactions: [{
		          amount: {
		            total: {{ number_format($total,2)}},
		            currency: 'USD'
		          }
		        }]
		      });
		    },
		    // Execute the payment
		    onAuthorize: function(data, actions) {
		      return actions.payment.execute().then(function() {
		        // Show a confirmation message to the buyer
		        window.alert('Thank you for your purchase!');
		      });
		    }
		  }, '#paypal-button');

		</script>
					<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ºº-->

				</p>
			</div>
		</div>
	</div>

@stop