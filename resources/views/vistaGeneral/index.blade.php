@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')
<div class="container fuenteTitulo">
	<div class="container">
		  <div class="jumbotron text-center cajaPrincipal divOpaco colorBlanco ">
		    <h1>INTERPOL: CASOS CRIMINALES</h1> 
	</div>

    	<div class="row">
	    	
	    	<div class="col-md-2"> </div>
	    	
	    	<div class="col-md-8 divOpaco colorBlanco text-center cajaPrincipal"> 
	    	<h1> MENU PRINCIPAL </h1>
	    	<div><a href="{{asset('comenzar')}}" class="btn btn-danger boton">Comenzar</div></a>
	    	<div><a href="{{asset('register')}}" class="btn btn-danger boton">Login/Registro</div></a>
	    	<div><a href="{{asset('top')}}" class="btn btn-danger boton margenInf">Ranking</div></a>
	    	</div>
	    	
	    	<div class="col-md-2"> </div>

    	</div>
    </div>
@endsection