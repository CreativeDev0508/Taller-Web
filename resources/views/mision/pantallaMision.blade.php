@extends('layouts.mision')  @section('titulo', 'Home')   @section('contenido')
	<div class="container">
		<div class="row">
			<div class="col-md-6"></div>
				<div class="col-md-5 margenIzq cajaNavegacion fuenteTitulo">
					<p style="margin-top: 20px;"> Agente [NOMBRE JUGADOR] , le damos la bienvenida a la agencia. Como sabe actualmente todos los agentes de campo se encuentran destinados a la caceria de los miembros de una organizacion criminal integrada por lo mas bajo de la sociedad, asesinos, ladrones, terroristas, entre otras amenazas. La mayoria de los integrantes de esta organizacion han sido indentificados salvo por los integrantes de mayor rango cuyas identidades son un misterio para todas las agencias de inteligencia. Su mision es darles caza por todo el mundo para asi poder obtener informacion que nos permita dar con los cabecillas de esta organizacion

					Su objetivo actual fue visto por ultima vez en [PAIS INICIO]; tiene [TIEMPO DE JUEGO] dias para dar con el mismo.

					Buena suerte...

					LA AGENCIA</p>
					<div style="margin-top: 30px">
					<a href="{{asset('pantallaJuego')}}" style="float: right;" class="btn btn-default fuenteTitulo">Comenzar mision</a>
					</div>	
			</div>
		</div>
	</div>
@endsection