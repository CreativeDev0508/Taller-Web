@extends('layouts/general')  @section('titulo', 'Titulo')   @section('contenido')
<div class="text-center">
    <h2>{{$pais->nombre}}</h2>
    <img src="{{asset($pais->bandera)}}" />
</div>
@endsection


