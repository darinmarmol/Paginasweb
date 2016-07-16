@extends('admin.templete.principal')

@section('content')
<table class="table table-striped">
<thead>
	<th>nombre</th>
	<th>usuario</th>
	<th>correo</th>
	<th>tipo</th>
	<th>accion</th>

</thead>
<tbody>
	@foreach($user as $use)
	<tr>
		<td>{{$use->nombre}}</td>
		<td>{{$use->usiario}}</td>
		<td>{{$use->email}}</td>
		<td>{{$use->tipo}}</td>
		<td> <a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a></td>

	</tr>
	@endforeach
</tbody>

</table>
