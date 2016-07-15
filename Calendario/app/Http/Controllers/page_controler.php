<?php

namespace examen\Http\Controllers;

use Illuminate\Http\Request;

use examen\Http\Requests;
use examen\usuario;
use examen\empleado;

class page_controler extends Controller
{
  	public function index(){
       // $empleados=\loginpage\empleado::all();
    	return view('index', compact('empleados'));
    }
    public function ingresar(){
    	return view('ingresar');
    }
    public function mostrar(){
    	return view('mostrar');
    }

    public function vista($id){
      $usuarios =usuario::find($id);
      //$usuarios->'nombre';
      //$usuarios->'usuario';
        //dd($id);
      dd($usuarios);
    }

    public function vistaempleados($id){
     // $empleados =empleado::find($id);
      //$empleados->'nombre';
      //$empleados->'apellidos';
        //dd($id);
      
      //dd($empleados);// si funciona;
      //para que devuelva una lista
      //User::findOrFail($id)
      return view('vwempleado.emp',['patito'=>empleado::findOrFail($id)]);
      //return view('vwempleado.emp',['patito'=>$empleados]);
     // return view('vwempleados',compact('empleados'));
    }
}
	