<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpedientesrrhhController extends Controller
{
	public function index()
	{
		return view('admin.recursohumano.listaexpedientesrrhh');		
	}

    public function crearexpedienterh()
	{
		return view('admin.recursohumano.crearexpedientesrrhh');	
	}

	public function verexpedienterh()
	{
		return view('admin.recursohumano.verexpedienterrhh');	
	}
	public function editarexpedienterh()
	{
		return view('admin.recursohumano.editarexpedienterrhh');	
	}
	public function borrarexpedienterh()
	{
			
	}
}
