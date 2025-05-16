<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SocioController extends Controller
{
    public function getAllSocios()
    {
        try {
            $response = Http::get(env('MICROSERVICE_SOCIOS_URL'));
            return response()->json($response->json(), $response->status());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al conectar con el microservicio.'], 500);
        }
    }
}

?>