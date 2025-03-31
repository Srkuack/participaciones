<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secciones extends Model
{
    /** @use HasFactory<\Database\Factories\SeccionesFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'nrc',
        'seccion',
    ];
}
