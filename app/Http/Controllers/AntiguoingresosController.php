<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntiguoingresosController extends Controller
{
     public function index()
	{
		return view('admin.academica.matricula.matriculaantiguoingreso');	
	}
}
