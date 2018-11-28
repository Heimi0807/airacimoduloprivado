<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadematriculadosController extends Controller
{
    public function verlista()
	{
		return view('admin.academica.matricula.listadealumnosmatriculados');	
	}
}
