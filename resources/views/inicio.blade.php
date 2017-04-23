@extends('layouts/master')  @section('titulo', 'Home')   @section('contenido')

<!-- Recuadro -->
<div class="panel panel-default fondo1">
  <div class="panel-body text-center">
    
    <div class="col-md-12">
        <div class="col-md-8">
            <h2>Argentina</h2>
            <img src="{{asset('images/pais/argentina/info1.png')}} " alt="imagen">
            <img src="{{asset('images/pais/argentina/info2.png')}} " alt="imagen">
            <img src="{{asset('images/pais/argentina/info3.png')}} " alt="imagen">
            <img src="{{asset('images/pais/argentina/info4.png')}} " alt="imagen">
        </div>
        <div class="col-md-4">
                <span>
                    Argentina es un país soberano de América del Sur, ubicado en el extremo sur y sudeste de dicho subcontinente. Adopta la forma de gobierno 
                    republicana, representativa y federal. El Estado argentino es un Estado federal descentralizado, integrado por un Estado nacional y 
                    veintitrés estados provinciales autónomos que constituyen la federación, que jurídicamente son preexistentes y que se reservan todos los 
                    poderes no delegados. Los municipios son autónomos y la federación tiene como capital federal a la Ciudad de Buenos Aires, que posee un 
                    régimen especial de autonomía establecido en la Constitución.
                    <img src="{{asset('images/pais/argentina/silueta.png')}} " alt="silueta">
                    <img src="{{asset('images/pais/argentina/bandera.png')}} " alt="bandera">
                </span>
        </div>
    
    
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