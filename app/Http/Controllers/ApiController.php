<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function getCursosFromApiAndShowInView()
    {
        // URL completa de la API y el endpoint
        $apiUrl = 'https://apiautoinstruc-production.up.railway.app';
        $endpoint = '/api/curso';
    
        $client = new Client();
    
        try {
            // Realiza la solicitud GET a la API para obtener la lista de cursos
            $response = $client->get($apiUrl . $endpoint);
    
            // Decodifica la respuesta JSON
            $cursos = json_decode($response->getBody(), true);
    
            // Muestra la vista 'modify-course' con los cursos
            return view('modify-course', ['cursos' => $cursos]);
        } catch (\Exception $e) {
            // Maneja cualquier error que pueda ocurrir durante la solicitud
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}