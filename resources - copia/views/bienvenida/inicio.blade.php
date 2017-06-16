@extends('layouts/master')  @section('titulo', 'Titulo')   @section('contenido')

<div class="text-center">
<h3>Bienvenido a la Jefatura Detective!!</h3>
<img src="https://s-media-cache-ak0.pinimg.com/236x/a1/36/01/a13601d7bf323f2f9a6c396786c0aa20.jpg" />
<h5 class="text-center">Su primer caso es encontrar a un fulano, la ultima vez se lo vio en {{$pais}}. Yo comenzaria por ahi.</h5>
<h6>Cuenta con un Mes de tiempo, o 720 Horas, para capturar al criminal. Cada pista que investigue le tomara una hora y cada pais que recorra lo hara perder 8 horas.</h6>
<a href="irpais/{{$idPais}}" class="btn btn-warning">Ir a {{$pais}}</a>
</div>
@endsection