<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editorial;

class LibroController extends Controller
{
    // Obtener todos los libros
    public function getLibros()
    {
        $libros = Libro::all();
        return response()->json($libros);
    }

    // Obtener un libro por ID
    public function getLibro($id)
    {
        $libro = Libro::find($id);

        if (!$libro) {
            return response()->json(['error' => 'Libro no encontrado'], 404);
        }

        return response()->json($libro);
    }

    // Crear un nuevo libro
    public function createLibro(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string',
            'autor' => 'required|string',
            'resumen' => 'nullable|string',
            'unidades' => 'required|integer|min:0',
            'nombre_editorial' => 'required|string'
        ]);

        $editorial = Editorial::where('nombre_editorial', $validated['nombre_editorial'])->first();

        if (!$editorial) {
            return response()->json([
                "error" => "Editorial no encontrada",
                "description" => "No existe una editorial con el nombre '{$validated['nombre_editorial']}'"
            ], 404);
        }

        $libro = Libro::create([
            'titulo' => $validated['titulo'],
            'autor' => $validated['autor'],
            'resumen' => $validated['resumen'],
            'unidades' => $validated['unidades'],
            'id_ed' => $editorial->id_ed
        ]);

        return response()->json([
            "message" => "Libro creado con éxito",
            "libro" => $libro
        ], 201);
    }


    // Actualizar un libro
    public function updateLibro(Request $request, $id)
{
    // Buscar el libro por ID
    $libro = Libro::find($id);

    if (!$libro) {
        return response()->json([
            "error" => "Libro no encontrado",
            "description" => "No se encontró un libro con el ID $id para actualizar",
            "code" => 404
        ], 404);
    }

    $validated = $request->validate([
        'titulo' => 'nullable|string', 
        'autor' => 'nullable|string',  
        'unidades' => 'nullable|integer', 
        'nombre_editorial' => 'nullable|string',
    ]);

    // Actualizar los campos proporcionados
    $libro->update(array_filter($validated));

    return response()->json([
        "message" => "Libro actualizado con éxito",
        "libro" => $libro
    ]);
}

    // Eliminar un libro
    public function borrarLibro($id)
    {
        $libro = Libro::find($id);

        if (!$libro) {
            return response()->json(['error' => 'Libro no encontrado'], 404);
        }

        $libro->delete();

        return response()->json(['message' => 'Libro eliminado']);
    }
}
