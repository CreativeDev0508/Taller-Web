@extends('layouts.master')  @section('titulo', 'Home')   @section('contenido')

<div class="container fuenteTitulo">
	<div class="row colorBlanco "><br />
		<div class="row divOpaco cajaOrden text-center">
				<h1>PRINCIPALES SOSPECHOSOS</h1>
				<h3>Estos son nuestros sospechosos principales. Selecciona al que tu crees que es el criminal que estuvimos buscando</h4>
				<form method="post" id="formularioOrden">{{ csrf_field() }}
				<input type="hidden" value="0" id="criminalSeleccionado" name="criminalSeleccionado" >
				<div id="generarOrden" class="btn btn-danger botonOrden" onclick="enviar()">GENERAR ORDEN</div><br />
				</form>
				
				@foreach($criminales as $criminal)
					<div class="col-md-4 fuenteOrden">
						{{$criminal->nombre}}<br />
					<img src="{{asset('images/')}}/{{$criminal->imagen}}" onclick="seleccionar('{{$criminal->nombre}}', {{$criminal->id}})" /><br /><br />
					</div>
				@endforeach


		</div>
	</div>


	<script>
		function seleccionar($criminal, $id){
			document.getElementById('generarOrden').style.display = 'block';
			$("#generarOrden").html("Generar Orden de Captura Para " + $criminal);
			document.getElementById("criminalSeleccionado").value = $id;
		}

		function enviar(){
			$( "#formularioOrden" ).submit();
		}
	</script>
</div>
@endsection