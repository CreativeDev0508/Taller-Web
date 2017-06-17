
@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
<div class="col-md-12 text-center">
	<img src="{{asset('images/mapamundi.png')}}">
	<div class="col-md-12 text-center">
	@foreach($paises as $p)	<a href="{{asset('irPais')}}/{{$p->id}}" class="btn btn-danger">{{$p->nombre}}</a>@endforeach
	</div>
	<div><a href="{{asset('volverPais')}}"><button type="button" class="btn btn-danger boton">Volver</button></></a>
</div>


@endsection


