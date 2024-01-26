<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificaciones';

    protected $fillable = [
        'id_estudiante',
        'id_leccion',
        'tipo'
    ];

    // Relación con la tabla "estudiantes"
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante', 'id_estudiante');
    }

    // Relación con la tabla "lecciones"
    public function leccion()
    {
        return $this->belongsTo(Leccion::class, 'id_leccion', 'id_leccion');
    }


}
