<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    /** @use HasFactory<\Database\Factories\DocenteFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'correo',
        'codigo',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
