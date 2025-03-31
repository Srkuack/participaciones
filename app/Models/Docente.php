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
    public function secciones()
    {
        return $this->hasMany(Secciones::class);
    }
    public function alumno_seccion()
    {
        // sirve para las relaciones de muchos a muchos
        return $this->hasMany(alumno_seccion::class);
    }
}
