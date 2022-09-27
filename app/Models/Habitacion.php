<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table="habitacionregis";
    protected $fillable =[

        'nombre',
        'tipo',
        'numero_habitacion',
        'piso',
        'cantidad',
        'precio',
        'estado'
        ];



}
