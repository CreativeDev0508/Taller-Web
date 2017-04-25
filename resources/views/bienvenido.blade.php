@extends('layouts/masterSinNav')  @section('titulo', 'Home')   @section('contenido')


<h1 class="text-center">VISTA BIENVENIDO (BRIAN)</h1> 
<h4 class="text-center">
    Esta vista es la que se muestra unicamente cuando el usuario se registra. Es la que va a tener la hoja de fondo y que te lleva al inicio, donde tenes
    toda la hoja principal digamos.
</h4>    
<div class="text-center"><a href="vistaGeneral/{{$pais}}">Ir a Pantalla Inicio</a></div>
@endsection