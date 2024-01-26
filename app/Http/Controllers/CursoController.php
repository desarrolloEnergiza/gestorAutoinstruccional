<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CursoController extends Controller
{
    public function crearCurso(Request $request)
    {
        // Obtener los datos del formulario
        $titulo = $request->input('titulo');
        $subtitulo = $request->input('subtitulo');
        $descripcion = $request->input('descripcion');

        $moduloTitulo = $request->input('modulo_titulo');
        $moduloSubtitulo = $request->input('modulo_subtitulo');
        $moduloNumero = $request->input('modulo_numero');
        $moduloDescripcion = $request->input('modulo_descripcion');
        $moduloDescripcion2 = $request->input('modulo_descripcion2');

        $presentacionNombre = $request->input('presentacion_nombre');
        $presentacionRuta1 = $request->input('presentacion_ruta1');
        $presentacionRuta2 = $request->input('presentacion_ruta2');

        $leccionTitulo = $request->input('leccion_titulo');
        $leccionNumero = $request->input('leccion_numero');
        $leccionSubtitulo = $request->input('leccion_subtitulo');

        $videoNombre = $request->input('video_nombre');
        $videoDescripcion = $request->input('video_descripcion');
        $videoRuta = $request->input('video_ruta');

        $textoTitulo = $request->input('texto_titulo');
        $textoDescripcion = $request->input('texto_descripcion');
        $textoRuta = $request->input('texto_ruta');

        // Construir el cuerpo de la solicitud
        $cursoData = [
            'titulo' => $titulo,
            'subtitulo' => $subtitulo,
            'descripcion' => $descripcion,
            'modulos' => [
                [
                    'titulo' => $moduloTitulo,
                    'subtitulo' => $moduloSubtitulo,
                    'numero' => $moduloNumero,
                    'descripcion' => $moduloDescripcion,
                    'descripcion2' => $moduloDescripcion2,
                    'presentaciones' => [
                        'nombre' => $presentacionNombre,
                        'ruta' => [$presentacionRuta1, $presentacionRuta2],
                    ],
                    'lecciones' => [
                        [
                            'titulo' => $leccionTitulo,
                            'numero' => $leccionNumero,
                            'subtitulo' => $leccionSubtitulo,
                            'videos' => [
                                [
                                    'nombre' => $videoNombre,
                                    'descripcion' => $videoDescripcion,
                                    'ruta' => $videoRuta,
                                ],
                            ],
                            'textos' => [
                                [
                                    'titulo' => $textoTitulo,
                                    'descripcion' => $textoDescripcion,
                                    'ruta' => $textoRuta,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        // Realizar la solicitud a la API para crear el curso
        $apiUrl = 'https://apiautoinstruc-production.up.railway.app';
        $endpoint = '/api/curso';

        $client = new Client();
        $response = $client->post($apiUrl . $endpoint, [
            'json' => $cursoData,
        ]);

        // Puedes procesar la respuesta según tus necesidades
        $nuevoCurso = json_decode($response->getBody(), true);

        // Retornar una respuesta, redireccionar, etc.
        return response()->json($nuevoCurso);
    }
}
