	{!! Form::open(['route'=>'administracion.usuariosdir.store', 'method'=>'POST'])!!}
		<div class="form-group">
			{!!Form::label('nombre','Nombre')!!}
			{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre completo','required'])!!}
		</div>

			<div class="form-group">
			{!!Form::label('usuario','Usuario')!!}
			{!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Nombre de usuario','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','correo electronico')!!}
			{!!Form::email('email',null,['class'=>'form-control','placeholder'=>'correo electronico','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('password','contraseña')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'*****','required'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('tipo','Tipo')!!}
			{!!Form::select('tipo',[''=>'Seleccione un tipo de usuario','Administrador'=>'Administrador','general'=>'general'],null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('registrar',['class'=>'btn btn primary'])!!}
			
		</div>

	

	{!! Form::close()!!}