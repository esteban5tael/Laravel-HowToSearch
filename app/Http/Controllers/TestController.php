<?php

namespace App\Http\Controllers;

use App\Models\Test; // Importa el modelo Test
use Illuminate\Http\Request; // Importa la clase Request de Laravel

class TestController extends Controller
{

    public function __invoke()
    {
        $message = ""; // Variable para almacenar un mensaje
        $search = request('search'); // Obtiene el valor de la solicitud GET con el nombre 'search'
        $tests = Test::query()
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('lastname', 'LIKE', "%{$search}%")
                    ->orWhere('email', 'LIKE', "%{$search}%");
            })
            ->orderBy('id', 'desc')
            ->simplePaginate(50); // Realiza una consulta en la base de datos utilizando Eloquent, aplica filtros de búsqueda y paginación

        if ($search) {
            // Comprobar si se encontraron resultados
            $message = $tests->count() > 0 ? "Se encontraron: " . $tests->count() . " registros." : "No se encontraron datos en la base de datos.";
        }

        return view('index', compact('tests', 'message')); // Retorna la vista 'index' y pasa los datos de $tests y $message a la vista
    }
}
