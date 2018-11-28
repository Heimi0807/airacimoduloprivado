<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registrardatospersonalestudiante extends Model
{

    protected $table='tb_expedienteestudiante';

    protected $fillable = [
        'v_expediente',
        'v_nie',
        'v_nombres',
        'v_apellidos',
        'v_genero',
        'f_fnacimiento',
        'v_direccion',
        'v_correo',
        'v_telCasa',
        'v_telCelular',
        'i_catFamiliares',
        'v_viveCon',
        'v_dependeDe',
        'v_nivelEducativo',
        'v_partidanum',
        'v_tomo',
        'v_folio',
        'v_libro',
        'v_fechaINgresoCE',
        'b_estado',
        'colonia_caserio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];



}
