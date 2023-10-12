<!DOCTYPE html> <!-- Declaración del tipo de documento HTML (HTML5) -->
<html lang="es"> <!-- Inicio del elemento HTML con el atributo 'lang' establecido en español -->

<head> <!-- Inicio de la sección de encabezado de la página -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres en UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Configuración de la vista en dispositivos móviles -->

    <title>How to Search en Laravel</title>
    <!-- Título de la página que se muestra en la barra de título del navegador -->

    <!-- Agregar enlaces a los archivos de Bootstrap 5 -->

    <link rel="stylesheet" href="{{ asset('storage/assets/css/bs5.css') }}">
    <!-- Enlace a una hoja de estilos CSS de Bootstrap 5 -->

</head> <!-- Fin de la sección de encabezado de la página -->

<body> <!-- Inicio del cuerpo de la página -->

    <div class="container mt-4"> <!-- Contenedor principal con margen superior de 4 unidades -->

        <h1 class="text-center">How to Search en Laravel</h1> <!-- Encabezado de nivel 1 centrado en la página -->

        <!-- Formulario de búsqueda -->
        <form action="" method="GET"> <!-- Inicio de un formulario que utiliza el método GET -->

            <div class="row mt-3" style="text-align: center">
                <!-- Fila de diseño con margen superior de 3 unidades y alineación central -->

                <div class="col-md-6"> <!-- Columna con anchura media en dispositivos medianos -->

                    <div class="input-group m-3"> <!-- Grupo de elementos de entrada con margen de 3 unidades -->
                        <input type="text" class="form-control m-1 text-center"
                            placeholder="Busca por: Nombre, Apellido o Email" name="search" id="search"
                            value="{{ request('search') }}">
                        <!-- Campo de entrada de texto con marcadores de posición y un valor predefinido -->
                        <div class="input-group-append">
                            <button class="btn btn-primary m-1" type="submit">Buscar</button>
                            <!-- Botón de búsqueda -->
                        </div>
                    </div>

                </div>

            </div>

        </form>
        <!-- Fin del formulario de búsqueda -->

        {{-- mensaje para los resultados de búsqueda --}}
        <div class="container mt-4">

            @if (isset($message) && !is_null($message))
                <!-- Inicio de una estructura condicional en Blade (Laravel) -->
                <p>{{ $message }}</p> <!-- Muestra un mensaje si se cumple la condición -->
            @endif <!-- Fin de la estructura condicional en Blade -->

        </div>
        {{-- mensaje para los resultados de búsqueda --}}

        <!-- Tabla -->
        <div class="table-responsive"> <!-- Contenedor de tabla con diseño receptivo -->
            <table class="table table-hover"> <!-- Tabla con estilo de resaltado en el puntero -->

                <thead class="thead-dark"> <!-- Encabezado de la tabla con fondo oscuro -->
                    <tr> <!-- Fila de encabezado -->
                        <th>Nombre</th> <!-- Celda de encabezado para "Nombre" -->
                        <th>Apellido</th> <!-- Celda de encabezado para "Apellido" -->
                        <th>Email</th> <!-- Celda de encabezado para "Email" -->
                    </tr>
                </thead>

                <tbody> <!-- Cuerpo de la tabla -->
                    <!-- Aquí puedes agregar filas de datos -->
                    @forelse ($tests as $test)
                        <!-- Bucle que recorre la variable "$tests" en Blade (Laravel) -->
                        <tr> <!-- Fila de datos -->
                            <td>{{ $test->name }}</td> <!-- Celda de datos para el nombre -->
                            <td>{{ $test->lastname }}</td> <!-- Celda de datos para el apellido -->
                            <td>{{ $test->email }}</td> <!-- Celda de datos para el correo electrónico -->
                        </tr>
                    @empty <!-- Bloque que se ejecuta si no hay datos en "$tests" -->
                        <tr> <!-- Fila de datos vacía -->
                            <td></td>
                            <td>No Data</td> <!-- Celda con el mensaje "No Data" -->
                            <td></td>
                        </tr>
                    @endforelse <!-- Fin del bucle en Blade -->

                </tbody>
            </table>
            <!-- Fin de la tabla -->
            {{-- En caso de que se quiera mostrar el paginado:
            {{ $tests->links() }} --}}
        </div>
    </div>

</body> <!-- Fin del cuerpo de la página -->

</html> <!-- Fin del elemento HTML -->
