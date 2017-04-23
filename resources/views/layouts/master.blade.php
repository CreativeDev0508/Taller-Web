<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Title - @yield('titulo')</title> 
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    <script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>	
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Nombre del Juego</h3>
                @include('nav/nav')
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>