<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudespermisosrhController extends Controller
{
    public function index()
	{
		return view('admin.recursohumano.solicitudespermisos.listasolicitudespermiso');	
	}

    public function versolicitud()
	{
		return view('admin.recursohumano.solicitudespermisos.versolicitudpermiso');	
	}

    public function crearsolicitud()
	{
		return view('admin.recursohumano.solicitudespermisos.crearsolicitudpermiso');	
	}

    public function editarsolicitud()
	{
		return view('admin.recursohumano.solicitudespermisos.editarsolicitudpermiso');	
	}
}
