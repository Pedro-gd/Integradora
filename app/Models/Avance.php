<?php
namespace App\Models;

/**
* Descripción: Ver Infografías y ver Vídeos, además de registrar avance
* Funcionalidades: Generar progreso del usuaurio
* Autor: Carlos Eduardo Miranda Valtierra
* Fecha: 16/03/2021
*/
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Avance extends Eloquent{
	protected $connection = 'mongodb';
	protected $collection = 'avance';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'progreso_parcial',
        'infografia',
        'video',
        'valor_recurso',
        'id_tema',
    ];
}