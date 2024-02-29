<?php
// app/Models/Matricula.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matriculas';

    protected $fillable = [
        'id_curso',
        'id_estudiante',
        'fecha_ingreso',
        'estado',
        'historial_cambios',
    ];

    protected $casts = [
        'historial_cambios' => 'json',
    ];

    // Relación con la tabla de cursos
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }

    // Relación con la tabla de estudiantes
    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id_estudiante');
    }
}
