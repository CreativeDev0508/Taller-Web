@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
	<div class="container margenSup fuenteTitulo" style="font-size: 20px">
		<div class="row ">

			<div class="col-md-2"></div>
			
			<div class="col-md-8 colorBlanco divOpaco ">
				@php $i = 0; @endphp
				<table class="table  text-center">
				<tr>
					<td><strong>Rank</strong></td>
					<td><strong>Jugador</strong></td>
					<td><strong>Misiones Realizadas</strong></td>
					<td><strong>Criminales Capturados</strong></td>
					<td><strong>Puntaje</strong></td>
				</tr>
				@foreach($tops as $top)
				@php $i++; @endphp
					<tr>
						<td>{{$i}}</td>
						<td>{{$top->usuario}}</td>
						<td>{{$top->mision}}</td>
						<td>{{$top->criminalesCapturados}}</td>
						<td>{{$top->puntaje}}</td>
					</tr>
				@endforeach
				</table>
				<div class="text-center margenInf"><a href="{{asset('/')}}" class="btn btn-danger boton margenInf">Volver</div></a> 
			</div>

			<div class="col-md-2"></div>

		</div>
	</div>
@endsection


 