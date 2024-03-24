<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
    protected $fillable = [
        'nombre_verdadero',
        'nombre_superheroe',
        'foto',
        'informacion_adicional',
        '_token', // Agrega _token a la lista de atributos fillable
    ];
}