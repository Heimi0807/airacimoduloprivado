<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CotizacionesController extends Controller
{
    public function index()
	{
		return view('admin.bonoescolar.cotizaciones.listacotizaciones');	
	}
	public function agregarcotizacion()
	{
		return view('admin.bonoescolar.cotizaciones.agregarcotizacion');	
	}
	public function editarcotizacion()
	{
		return view('admin.bonoescolar.cotizaciones.editarcotizacion');	
	}
	public function vercotizacion()
	{
		return view('admin.bonoescolar.cotizaciones.vercotizacion');	
	}
}
