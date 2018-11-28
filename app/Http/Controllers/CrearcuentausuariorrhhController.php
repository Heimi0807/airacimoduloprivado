<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearcuentausuariorrhhController extends Controller
{
	public function index()
	{
		return view('admin.recursohumano.crearcuentausuariorrhh');	
	}
	public function editarcuentausuario()
	{
		return view('admin.recursohumano.editarcuentausuariorrhh');	
	}
}
