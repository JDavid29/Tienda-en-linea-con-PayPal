@if(Auth::check())
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user fa_custom fa-2x"></i> {{ Auth::user()->user}} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li>
				<a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Finalizar Sesion') }}
                </a>
               	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   	@csrf
                </form>
			</li>
		</ul>
	</li>
@else
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
			<i class="fa fa-user fa_custom fa-2x"></i> <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
			<li><a href="{{ route('login')}}">Iniciar Sesion</a></li>
		</ul>
	</li>
@endif