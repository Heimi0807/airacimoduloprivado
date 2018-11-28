<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpedientesController extends Controller
{
    public function index()
	{
		return view('admin.academica.expedientesestudiantes.listadeexpedientesactivos');	
	}
    public function crearexpediente()
	{
		return view('admin.academica.expedientesestudiantes.expediente');	
	}
	public function verexpediente()
	{
		return view('admin.academica.expedientesestudiantes.verexpedienteestudiantes');	
	}
}
