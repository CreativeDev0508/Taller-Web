
@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
<div class="col-md-12 text-center">
	<img src="{{asset('images/mapamundi.png')}}"><br /><br />
	
	<div class="col-md-12 text-center">
	
	@if(Auth::User()->tiempo > 0)
	<div class="alert alert-success">Tiempo Restante: {{Auth::User()->tiempo }} Hora/s</div>
		@foreach($paises as $p)
			<a href="{{asset('irPais')}}/{{$p->id}}" class="btn btn-danger">{{$p->nombre}}</a>
		@endforeach

		@else
			<div class="alert alert-danger">Se te acabo el tiempo!</div>
	@endif
	</div>
	<div><a href="{{asset('volverPais')}}"><button type="button" class="btn btn-danger boton">Volver</button></></a>
</div>


@endsection


