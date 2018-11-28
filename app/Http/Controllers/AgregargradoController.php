<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregargradoController extends Controller
{
   

public function index()
	{
		return view('admin.academica.grados.agregargrado');
			
	}


	public function store(Request $request)
	{
	dd('store');
//dd($request->all());

	}
	

	
}
