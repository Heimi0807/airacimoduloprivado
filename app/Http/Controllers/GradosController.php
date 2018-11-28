<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradosController extends Controller
{
   public function index()
	{
    return view('admin.academica.grados.listagrados');
    }



}
