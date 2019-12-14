@extends('store.template')
<!--estiende el menu o como se llame la parte de ariba-->

@section('content')
	<h1 class="display-4 text-center">Que tal. Dejanos tu opinion</h1>

	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-10"><!--UN POCO MAS ANCHO-->
	            <div class="card">

	                <div class="card-header d-flex justify-content-between align-items-center">

	                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm">Volver a la tienda ;)</a>

	                </div>

	                <!--MENSAJE PARA LAELIMINACION DE DATOS-->
	                @if ( session('mensaje') )
	                    <div class="alert alert-success">{{ session('mensaje') }}</div>
	                @endif
	                <!--VVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVV-->
	                <form action="/correo" method="POST" accept-charset="utf-8">
					<!--proteccion de maliciosos-->
					@csrf

					@error('nombre')
			            <div class="alert alert-danger">
			              El Nombre es Obligatorio
			            </div>
			    	@enderror

					<input type="" name="nombre" placeholder="Nombre..." class="form-control mb-2">


					@error('email')
			        <div class="alert alert-danger alert-dismissible fade show" role="alert">
			          El Email es Obligatorio
			          <button type="button" class="close" data-dismiss="alert" aria-label="close">
			            <span area-hidden="true">&times;</span>
			          </button>
			        </div>
			    	@enderror

					<input type="email" name="email" placeholder="Email..." class="form-control mb-2">


					@error('asunto')
			        <div class="alert alert-danger alert-dismissible fade show" role="alert">
			          El Asunto es Obligatorio
			          <button type="button" class="close" data-dismiss="alert" aria-label="close">
			            <span area-hidden="true">&times;</span>
			          </button>
			        </div>
			    	@enderror

					<input type="" name="asunto" placeholder="Asunto..." class="form-control mb-2">


					@error('mensaje')
			        <div class="alert alert-danger alert-dismissible fade show" role="alert">
			          El Mensaje es Obligatorio
			          <button type="button" class="close" data-dismiss="alert" aria-label="close">
			            <span area-hidden="true">&times;</span>
			          </button>
			        </div>
			    	@enderror

					<textarea name="mensaje" placeholder="Mensaje o sugerencias..." class="form-control mb-2"></textarea>

					<button class="btn btn-primary btn-block">Enviar</button>
				</form>
				<br>
	            </div>
	        </div>
	    </div>
	</div>
	<br>
@stop