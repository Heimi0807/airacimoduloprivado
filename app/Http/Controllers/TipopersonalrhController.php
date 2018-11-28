<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipopersonalrhController extends Controller
{
     public function index()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipopersonal.listatipopersonalrh');		
	}
	public function creartipopersonal()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipopersonal.creartipopersonalrh');		
	}

	public function editartipopersonal()
	{
		//dd('entra a create');
	return view('admin.configuraciones.recursohumano.tipopersonal.editartipopersonalrh');		
	}
}
