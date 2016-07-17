<!DOCTYPE html>
<html>
<head>

	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/metismenu.min.css')!!}
	{!!Html::style('css/sb-admin-2.css')!!} 
	{!!Html::style('css/font-awesome.min.css')!!} 
	{!!Html::style('css/estilos.css')!!} 


	<title>('title','Default') | panel de administracion</title>
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	<section>
		
	</section>
@yield('content')


	{!!Html::script('js/query.min.js')!!}
	{!!Html::script('js/bootstrap.min.js')!!}
	{!!Html::script('js/metismenu.min.js')!!}
	{!!Html::script('js/sb-admin-2.js')!!} 
</body>
</body>
</html>
