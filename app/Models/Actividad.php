<?php
namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
/**
* Descripción: Modelo para administracion de entregar de actividad del usuario 
* Autor: Miguel Arturo Rojas Hernández
* Fecha: 17/03/2021
*/

class Actividad extends Eloquent{
	protected $connection = 'mongodb';
    protected $collection = 'actividad';
    protected $primaryKey = 'Id_actividad';
    protected $fillable = [
        'Id_actividad',
        'Estatus_calificacion',
        'Nombre_actividad',
        'Estatus_entrega',
        'Ultima_modificacion',
        'Fecha_entrega',
        'Tiempo_restante',
        'Fecha_envio',
        'Retro_alimentacion',
        'calificacion'
        
    ];
}
