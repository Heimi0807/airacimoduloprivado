<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenesdecompraController extends Controller
{
    public function index()
	{
		return view('admin.bonoescolar.ordenesdecompra.listaordenesdecompra');	
	}
	public function agregarordendecompra()
	{
		return view('admin.bonoescolar.ordenesdecompra.agregarordendecompra');	
	}
	public function editarordendecompra()
	{
		return view('admin.bonoescolar.ordenesdecompra.editarordendecompra');	
	}
	public function verordendecompra()
	{
		return view('admin.bonoescolar.ordenesdecompra.verordendecompra');	
	}
}
