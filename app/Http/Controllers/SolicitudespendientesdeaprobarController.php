<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudespendientesdeaprobarController extends Controller
{
    public function verlista()
	{
		return view('admin.academica.matricula.solicitudespendientesdeaprobar');	
	}
}
