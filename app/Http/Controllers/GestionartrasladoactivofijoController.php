<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionartrasladoactivofijoController extends Controller
{
    public function index()
	{
		return view('admin.activofijo.gestionartraslado');	
	}

	 public function registrartraslado()
	{
		return view('admin.activofijo.agregartraslado');

	}

	public function vertraslado()
	{
		return view('admin.activofijo.verdetalletraslado');
	}

	public function editartraslado()
	{
		return view('admin.activofijo.editartraslado');
	}
}
