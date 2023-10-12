<?php


use App\Http\Controllers\TestController; // Importa el controlador TestController
use Illuminate\Support\Facades\Route; // Importa la clase Route de Laravel

Route::get('/', TestController::class); // Define una ruta que responde a la solicitud GET en la raíz del sitio y la asocia al controlador TestController

?>
<!--  -->