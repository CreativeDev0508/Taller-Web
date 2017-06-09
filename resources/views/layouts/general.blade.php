<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nombre del Juego - @yield('titulo')</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</head>
<body>
<div class="container">
    <div class="row"><br />
        <div class="panel panel-default">
            <div class="panel-heading text-center">Agente Russo | Rango: Recluta | Hora: 18:00</div>
            <div class="panel-body">
                <div class="panel panel-default"><div class="panel-body">@yield('contenido')</div></div>
                <div class="panel panel-default text-center"><div class="panel-body">
                    <a href="#" class="btn btn-success btn-lg">Ver</a> <a href="#" class="btn btn-success btn-lg">Mapa</a> <a href="#" class="btn btn-success btn-lg">Investigar</a> <a href="#" class="btn btn-success btn-lg">Armar Orden</a> 
                </div></div>
            </div>
        </div>
    </div>
        
    </div>
</div>
<footer>    <br /><h3 class="text-center">Nombre del Juego | 2017</h3><br />   </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>