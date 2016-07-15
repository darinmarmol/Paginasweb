		
@extends('Layouts.Principal')

@section('content')


<h1>Datos tabla empleado</h1>
	<h2>Estos son: </h2>
	<table>
		<thead>
			<th>Nombre</th>
			<th>Direccion</th>
			<th>Telefono</th>
		</thead>
		@foreach($empleados as $empleado)
		<tbody>
			<th>{{$empleado->nombre}}</th>
			<th>{{$empleado->apellidos}}</th>			
		</tbody>
		@endforech
	</table>
