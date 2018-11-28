<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogodecuentasController extends Controller
{
    public function index()
	{
		return view('admin.bonoescolar.catalogodecuentas.catalogodecuentas');	
	}

	public function crearcuenta()
	{
		return view('admin.bonoescolar.catalogodecuentas.crearcuenta');	
	}
	public function editarcuenta()
	{
		return view('admin.bonoescolar.catalogodecuentas.editarcuenta');	
	}
}
