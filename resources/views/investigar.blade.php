@extends('layouts/master')  @section('titulo', 'Home')   @section('contenido')

<!-- Recuadro -->
<div class="panel panel-default fondo1">
  <div class="panel-body text-center">
    
    <div class="col-md-12">
            <h2>Selecciona el lugar que quieras investigar</h2>
            <h6>Recuerda que cada lugar que visites consumira 8 horas de tu tiempo</h6>
            <img src="{{asset('images/lugares/aeropuerto.png')}} " alt="imagen">
            <img src="{{asset('images/lugares/iglesia.png')}} " alt="imagen">
            <img src="{{asset('images/lugares/puerto.png')}} " alt="imagen">
            <br /><br />
    </div>
    
    <!-- Grupo de botones -->
    <div class="btn-group">
        <button type="button" class="btn btn-default">MAPA</button>
        <button type="button" class="btn btn-default">INVESTIGAR</button>
        <button type="button" class="btn btn-default">ORDEN DE ARRESTO</button>
    </div>

  </div>
</div>

@endsection