<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionexpedientesestudiantesController extends Controller
{
    public function index()
	{
		return view('admin.academica.expedientesestudiantes.listadeexpedientesactivos');	
	}

	public function registrardatospersonales()
	{
		return view('admin.academica.expedientesestudiantes.registrardatospersonalestudiante');	
	}

	public function registrarcuentausuario()
	{
		return view('admin.academica.expedientesestudiantes.registrarusuarioestudiante');	
	}

	public function registrardatosmedicos()
	{
		return view('admin.academica.expedientesestudiantes.registrardatosmedicosestudiante');	
	}
	public function registrarfamiliares()
	{
		return view('admin.academica.expedientesestudiantes.registrarfamiliaresestudiantes');	
	}

	public function verexpediente()
	{
		return view('admin.academica.expedientesestudiantes.expediente');	
	}

	public function editardatospersonales()
	{
		return view('admin.academica.expedientesestudiantes.editardatospersonalestudiante');	
	}
	public function editardatosmedicos()
	{
		return view('admin.academica.expedientesestudiantes.editardatosmedicosestudiante');	
	}
	
}
