@extends('layouts/master')  @section('titulo', 'Titulo')   @section('contenido')

<h3 class="text-center">TOP - Mejores Detectives </h3>

<table class="table text-center table-hover">
<tr>
  <td><strong>#</strong></td>
  <td><strong>Jugador</strong></td>
  <td><strong>Tiempo Transcurrido</strong></td>
  <td><strong>Jefes Capturados</strong></td>
  <td><strong>Criminales Capturados</strong></td>
  <td><strong>Puntaje</strong></td>  
</tr>
 
<tr>
  <td>1</td>
  <td>JuanManuel245</td>
  <td>20 Horas</td>
  <td>5</td>
  <td>20</td>
  <td>2500</td>
</tr>
 
<tr>
  <td>2</td>
  <td>Escobarcho</td>
  <td>22 Horas</td>
  <td>5</td>
  <td>20</td>
  <td>2480</td>
</tr>
 
<tr>
  <td>3</td>
  <td>Gallitolio</td>
  <td>28 Horas</td>
  <td>4</td>
  <td>17</td>
  <td>1930</td>
</tr>
</table>
@endsection