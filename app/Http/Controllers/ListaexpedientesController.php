<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaexpedientesController extends Controller
{
    public function index()
	{
		return view('admin.academica.expedientesestudiantes.listadeexpedientesactivos');	
	}
}
