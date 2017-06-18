@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
	<div class="container fuenteTitulo">
		
		<div class="row colorBlanco">
			<div class="col-md-4 divOpaco cajaMapa margenDerecho" style="font-size: 15px">
				<h1>UBICACION ACTUAL: {{$pais->nombre}} </h1>
				<img src="{{asset('images/pais')}}/{{$pais->imagen}}" class=" text-center">
				<div style="margin-top: 25px; font-size: 20px">
					{!! $pais->descripcion !!}
				</div>
			</div>

			<div class="col-md-7">

				<div class="col-md-12 divOpaco cajaNavegacion">
					<div class=" pistas divOpaco text-center" data-toggle="modal" data-target="#pista1"> <img src="{{asset('images/lugares/shopping.png')}}"></div>
					<div class=" pistas divOpaco text-center" data-toggle="modal" data-target="#pista2"> <img src="{{asset('images/lugares/biblioteca.png')}}"></div>
					<div class=" pistas divOpaco text-center" data-toggle="modal" data-target="#pista3"> <img src="{{asset('images/lugares/aeropuerto.png')}}"></div>
				</div>
				<div class="col-md-12 divOpaco margenSup cajaOpc text-center">

					<a href="{{asset('mapa')}}" class="btn btn-danger botonJuego ">MAPA</a>
					<a href="{{asset('orden')}}" class="btn btn-danger botonJuego">ORDEN DE CAPTURA</a>					
				</div>

			</div>

		</div>

	</div>


  <!-- Modal Pista 1 -->
  <div class="modal fade" id="pista1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p> {!! $pista1 !!} </p>
		          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Modal Pista 2 -->
  <div class="modal fade" id="pista2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>{!! $pista2 !!}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Modal Pista 3 -->
  <div class="modal fade" id="pista3" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>{!! $pista3 !!}</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@endsection