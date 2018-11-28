<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionpadresdefamiliaController extends Controller
{
    public function index()
	{
		return view('admin.academica.padresdefamilia.gestionarpadresdefamilia');	
	}
}
