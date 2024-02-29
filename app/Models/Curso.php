<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Curso extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'curso';

    protected $fillable = [
        'titulo', 'subtitulo', 'descripcion', 'modulos',
    ];

    protected $casts = [
        'modulos' => 'array',
    ];
}
