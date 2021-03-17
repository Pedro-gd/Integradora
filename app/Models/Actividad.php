<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
/**
* Descripción: Modelo para entregar de actividad del usuario 
* Autor: Miguel Arturo Rojas Hernández
* Fecha: 17/03/2021
*/

class Registro extends Eloquent{
	protected $connection = 'mongodb';
    
  


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idActividad',
        'estatusCalificación',
        'nombreActividad',
        'estatusEntrega',
        'ultimaModificacion',
        'fechaEntrega',
        'tiempoRestante',
        'fechaEnvio',
        'retroAlimentacion',
        'calificacion'
    ];
}
