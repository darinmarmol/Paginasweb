<?php

namespace examen\Http\Controllers;

use Illuminate\Http\Request;

use examen\Http\Requests;
use examen\usuario;

class usuarioscontrolador extends Controller
{
	public function index()
	{

		$user=Usuario::All();
		return view('admin/usuarios.inicio',compact('user'));
		//$user=Usuario::orderBy('id','ASC');
		//return view('admin.usuarios.inicio')->with('user',$user);
	}
	public function create()	
	{
		return view('admin.usuarios.crear');

	}

	public function store(request $request)
	{ 
		//dd('exito');
		/*$user=new usuario($request->all());
		$user->password=bcrypt($request->password);
		$user->save();
		dd('usuario ingresado');*/
		dd($request->all());

	}
	public function show($id)
	{

	}
    //
}
