<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'nombre',
        'id_cargo',
        'nombres',
        'p_apellido',
        's_apellido',
        'email',
        'direccion',
        'telefono',
        'fecha_ingreso',
        'salario'
    ];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }
}
