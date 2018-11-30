<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "tb_empleado";

    protected $fillable = ['v_nombres', 'v_apellidos', 'f_fechanaci','v_genero', 'v_direccioncasa', 'v_diu', 'v_nit', 'v_telcasa', 'v_celular', 'f_fechaingresoalCE', 'v_tipocontratacion', 'tipopersonal_id', 'v_tituloacademico', 'cago_id', 'd_sueldo', 'especialidad_id', 'v_nip', 'v_nup', 'f_fechaingresoministerio', 'v_nivelescalafon', 'v_categoriaescalafon'];

    public function tipoPersonal()
    {
    	return $this->belongsTo('App/TipoPersonal');
	}

	public function cargo()
    {
    	return $this->belongsTo('App/Cargo');
	}

	public function especialidad()
    {
    	return $this->belongsTo('App/Especialidad');
	}
}
