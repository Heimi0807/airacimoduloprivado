<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaseccionesController extends Controller
{
    public function index()
	{
		//dd('entra a create');
		return view('admin.academica.secciones.listasecciones');		
	}
}
