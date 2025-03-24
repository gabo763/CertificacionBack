<?php

namespace App\Http\Controllers;
use App\Models\Estudiante; 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $response = response()->json([
            'success' => true,
            'data' => 'Prueba CORS',
            'headers' => request()->headers->all()
        ]);
    
        // Agregar headers de diagnóstico
        $response->headers->set('Access-Control-Allow-Origin', 'http://localhost:5173');
        $response->headers->set('Access-Control-Allow-Methods', '*');
        $response->headers->set('Access-Control-Allow-Headers', '*');
        $response->headers->set('X-CORS-Debug', 'Middleware funcionando');
        $response->headers->set('Access-Control-Max-Age', '3600');
    
        return $response;
    }

    public function store(Request $request)
    {
        dd($request);
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email|max:255',
            'fecha_registro' => 'nullable|date',
        ]);

        $estudiante = Estudiante::create([
            'nombre' => $validated['nombre'],
            'email' => $validated['email'],
            'fecha_registro' => $validated['fecha_registro'] ?? now(),  
        ]);

        return response()->json($estudiante, 201);
    }

}
