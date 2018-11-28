<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargosrhController extends Controller
{
    public function index()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipocargospersonal.listatipocargorh');		
	}
	public function creartipocargo()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipocargospersonal.creartipocargorh');		
	}

	public function editartipocargo()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipocargospersonal.editartipocargorh');		
	}
}
