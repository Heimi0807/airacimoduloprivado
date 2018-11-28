<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatriculasController extends Controller
{
    public function registrarmatricula()
	{
		return view('admin.academica.matricula.matricula');	
	}
}
