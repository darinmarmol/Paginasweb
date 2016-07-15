
@extends('Layouts.Principal')

@section('content')

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<h1>Formulario</h1>
<h3>LLenar formulario</h3>



<form action="EmpleadoController.guardar" method="post">
<div>
<label for="">Nombre: </label><input type="text" value="" name="nom"> <br> <br>
<label for="">Direccion: </label><input type="text" value="" name="dire"> <br> <br>
<label for="">Telefono: </label><input type="text" value="" name="tel"> <br> <br>
<input type="submit" value="Guardar" > <br>
</div><br>
</form>

<form action="EmpleadoController.index" method="get">
	<input type="submit" value="regresar">

</form>
