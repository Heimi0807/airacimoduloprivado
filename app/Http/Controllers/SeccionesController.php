<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seccion;

class SeccionesController extends Controller
{
    public function index()
	{
		//dd('entra a create');
		return view('admin.academica.secciones.agregarseccion');		
	}
	 public function guardar(Request $request)//request son los valores que estamos recibiendo del formulario desde donde hemos invocado la ruta guardar
	{

	$Seccion = new Seccion($request->all());
	$Seccion->save();
	dd('Seccion guardada');

	}
}
