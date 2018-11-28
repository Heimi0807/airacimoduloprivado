<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function agregarusuario()
	{
		return view('admin.seguridad.agregarusuarios');	
	}
}
