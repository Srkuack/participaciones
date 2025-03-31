<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secciones extends Model
{
    /** @use HasFactory<\Database\Factories\SeccionesFactory> */
    use HasFactory;
    protected $table = 'secciones';
    protected $fillable = [
        'nombre',
        'nrc',
        'seccion',
    ];

    public function docente()
    {
        // Relación inversa con el modelo Docente
        // Un docente puede tener muchas secciones
        return $this->belongsTo(Docente::class);
    }
    public function alumnos()
    {
        // Relación muchos a muchos con el modelo Alumnos
        return $this->belongsToMany(alumnos::class, 'alumno_seccion');
    }
}
