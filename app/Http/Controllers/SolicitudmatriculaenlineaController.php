<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudmatriculaenlineaController extends Controller
{
    public function index()
	{
		return view('admin.moduloenlineaestudiantes.solicitudmatriculaenlinea');	
	}
}
