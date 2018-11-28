<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionaractivofijoController extends Controller
{
    public function index()
	{
		return view('admin.activofijo.gestionaractivofijo');	
	}

	public function agregaractivo()
	{
		return view('admin.activofijo.agregaractivo');	
	}
	public function editaractivo()
	{
		return view('admin.activofijo.editaractivo');	
	}

	public function descargaractivo()
	{
		return view('admin.activofijo.descargaractivo');	
	}

	public function verdetalleactivo()
	{
		return view('admin.activofijo.verdetalleactivo');	
	}


}
