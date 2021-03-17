<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
/**
* Descripción:  Administracion de las notificaciones enviadas por el docente  
* Funcionalidad: Envio de notificaciones a los participantes 
* Autor: Pedro Emmanuel Martinez Rodriguez
* Fecha: 17/03/2021
*/

class Registro extends Eloquent{
	protected $connection = 'mongodb';
	protected $collection = 'notificacion';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario',
        'asunto',
        'fecha_envio',
        'status_notificacion'
    ];
}
