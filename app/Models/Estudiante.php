<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';

    protected $fillable = [
        'nombre',
        'apellido',
        'mail',
        'password',
        'rut',
        'estado',
    ];

    // Relación con la tabla "pruebas"
    public function pruebas()
    {
        return $this->hasMany(Prueba::class, 'id_estudiante', 'id_estudiante');
    }

    // Relación con la tabla "matriculas"
    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'id_estudiante', 'id_estudiante');
    }

    // Relación con la tabla "progreso"
    public function progreso()
    {
        return $this->hasOne(Progreso::class, 'id_estudiante', 'id_estudiante');
    }

    // Relación con la tabla "calificaciones"
    public function calificaciones()
    {
        return $this->hasMany(Calificacion::class, 'id_estudiante', 'id_estudiante');
    }



}
