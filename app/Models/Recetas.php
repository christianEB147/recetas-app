<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'duracion',
        'categoria',
        'descripcion',
        'pasos',
        'user_id',
        'imagen',
    ];
    
}
