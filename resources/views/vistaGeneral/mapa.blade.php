
@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
<div class="col-md-12 text-center fuenteTitulo colorBlanco">
	
	<div class="col-md-5 text-center divOpaco margenMapa" style="height: 450px;">
		<h1> MENU DE BUSQUEDA </h1>
		@if(Auth::User()->tiempo > 0)
		<div class="alert alert-success" style="font-size:25px">Tiempo Restante: {{Auth::User()->tiempo }} Hora/s</div>
			@foreach($paises as $p)
				<div ><a href="{{asset('irPais')}}/{{$p->id}}" class="btn btn-danger botonMapa" style="font-size:20px; margin-bottom: 10px">{{$p->nombre}}</a></div>
			@endforeach

			@else
				<div class="alert alert-danger">Se te acabo el tiempo!</div>
		@endif
	</div>
	<div class="col-md-7 text-center margenMapa divOpaco" style="height: 450px;">
		<img src="{{asset('images/mapamundi2.png')}}" style="margin-top: 8px;"><br /><br />
	</div>
	<div><a href="{{asset('irPais')}}/{{session('pais')}}"><button type="button" class="btn btn-danger boton">Volver</button></></a></div>
</div>


@endsection


