<?php
namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
/**
* Descripción: Crear un nuevo curso
* Funcionalidad: Agregar actividades, examen y tarjetas de repaso de contenido a un curso nuevo.
* Autor: Cárdenas Rincpon María Concepción
* Fecha: 17/03/2021
*/

class Registro extends Eloquent{
	protected $connection = 'mongodb';
	protected $collection = 'registro';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idCurso',
        'nombreCurso',
        'asignatura',
        'grupo',
	'periodo',
	'noParcial',
    ];
 protected $fillable = [
        'nombAct',
        'descripAct',
        'valor',
        'recursos',
	'noParcial',
    ];
 protected $fillable = [
        'examen',
        'tarjetaContenido',
    ];
}