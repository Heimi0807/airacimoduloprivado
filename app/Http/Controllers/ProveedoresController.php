<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index()
	{
		return view('admin.bonoescolar.proveedores.listaproveedores');	
	}
	public function agregarproveedor()
	{
		return view('admin.bonoescolar.proveedores.agregarproveedor');	
	}
	public function editarproveedor()
	{
		return view('admin.bonoescolar.proveedores.editarproveedor');	
	}
	public function vearproveedor()
	{
		return view('admin.bonoescolar.proveedores.verproveedor');	
	}
}
