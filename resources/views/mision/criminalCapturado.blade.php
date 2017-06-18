@extends('layouts/master')  @section('titulo', 'Titulo')   @section('contenido')

<div class="container fuenteTitulo">
	<div class="row colorBlanco "><br />
<div class="row divOpaco cajaOrden text-center">
<h3 class="text-center">{{$mensaje}}</h3>

<h3 class="text-center"> Tu puntaje final es: {{$puntaje}}</h3>

<h2 class="text-center"><a href="#" class="btn btn-danger btn-lg">--> VOLVER A JUGAR <--</a></h2>
</div>
</div>
</div>

@endsection