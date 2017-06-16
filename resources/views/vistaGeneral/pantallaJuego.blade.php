@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
	<div class="container fuenteTitulo">
		
		<div class="row colorBlanco">
			<div class="col-md-4 divOpaco cajaMapa margenDerecho" style="font-size: 15px">
				<h1>UBICACION ACTUAL:[ PAIS ACTUAL ]</h1>
				<img src="{{asset('images/arg.jpg')}}" class=" text-center">
				<div style="margin-top: 25px; font-size: 20px">
				<ul>
					<li>Capital: Buenos Aires </li>
					<li>Idioma oficial: Castellano </li>
					<li>Gentilicio	Argentino/a </li>
					<li>Forma de gobierno: República federal democrática </li>
					<li>Órgano legislativo:	Congreso de la Nación Argentina </li>
				</ul>
				</div>
			</div>

			<div class="col-md-7">

				<div class="col-md-12 divOpaco cajaNavegacion">
<<<<<<< HEAD
					<div class=" pistas divOpaco text-center"> <img src="{{asset('images/lugares/shopping.png')}}"></div>
					<div class=" pistas divOpaco text-center"> <img src="{{asset('images/lugares/biblioteca.png')}}"></div>
					<div class=" pistas divOpaco text-center"> <img src="{{asset('images/lugares/aeropuerto.png')}}"></div>
				</div>
				<div class="col-md-12 divOpaco margenSup cajaOpc text-center">

					<a href="{{asset('mapa')}}" class="btn btn-danger botonJuego ">MAPA</a>
					<a href="{{asset('orden')}}" class="btn btn-danger botonJuego">ORDEN DE CAPTURA</a>
=======
					<h1>CUADRO DE NAVEGACION</h1>
				</div>
				<div class="col-md-12 divOpaco margenSup cajaOpc text-center">

					<div><a href="{{asset('mapa')}}" class="btn btn-danger botonJuego">MAPA</div></a>
					<div><a href="{{asset('orden')}}" class="btn btn-danger botonJuego">ORDEN DE CAPTURA</div></a>
>>>>>>> 17268826f6d7dd8718c295bb2017c69ec557a0d3
					
				</div>

			</div>

		</div>

	</div>
@endsection