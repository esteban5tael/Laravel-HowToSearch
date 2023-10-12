<?php

namespace Database\Seeders;

use App\Models\Test; // Importa el modelo Test
use Illuminate\Database\Seeder; // Importa la clase Seeder de Laravel

class TestSeeder extends Seeder
{

    public function run(): void
    {
        // Arrays con nombres, apellidos y correos electrónicos simulados
        $names = [
            'Juan', 'María', 'Antonio', 'Laura', 'Manuel', 'Ana', 'Carlos', 'Sofía', 'Pedro', 'Carmen',
            'Luis', 'Marta', 'Alejandro', 'Andrea', 'Javier', 'Paula', 'Sergio', 'Raquel', 'Daniel', 'Elena',
            'José', 'Beatriz', 'Miguel', 'Lucía', 'David', 'Patricia', 'Francisco', 'Silvia', 'Guillermo', 'Raúl',
            'Diego', 'Natalia', 'Ricardo', 'Isabel', 'Ángel', 'Carolina', 'Fernando', 'Lorena', 'Jorge', 'Victoria',
            'Álvaro', 'Adriana', 'Eduardo', 'María José', 'Manuel', 'Andrea', 'Gabriel', 'Martina', 'Guillermo', 'Laura'
        ];

        $lastnames = [
            'García', 'Rodríguez', 'Pérez', 'Fernández', 'López', 'Martínez', 'Sánchez', 'González', 'Ramírez', 'Torres',
            'Díaz', 'Vargas', 'Ortega', 'Morales', 'Ruiz', 'Castro', 'Herrera', 'Jiménez', 'Moreno', 'Delgado',
            'Ríos', 'Navarro', 'Cordero', 'Mendoza', 'Gómez', 'Acosta', 'Aguilar', 'Cruz', 'Medina', 'Espinoza',
            'Ayala', 'Arroyo', 'Peralta', 'Villanueva', 'Guzmán', 'Paredes', 'Santos', 'Flores', 'Rojas', 'Gallego',
            'Salas', 'Reyes', 'Cárdenas', 'León', 'Silva', 'Alemán', 'Zamora', 'Montes', 'Chacón', 'Rangel'
        ];

        $emails = [
            'juan@example.com', 'maria@example.com', 'antonio@example.com', 'laura@example.com', 'manuel@example.com',
            'ana@example.com', 'carlos@example.com', 'sofia@example.com', 'pedro@example.com', 'carmen@example.com',
            'luis@example.com', 'marta@example.com', 'alejandro@example.com', 'andrea@example.com', 'javier@example.com',
            'paula@example.com', 'sergio@example.com', 'raquel@example.com', 'daniel@example.com', 'elena@example.com',
            'jose@example.com', 'beatriz@example.com', 'miguel@example.com', 'lucia@example.com', 'david@example.com',
            'patricia@example.com', 'francisco@example.com', 'silvia@example.com', 'guillermo@example.com', 'raul@example.com',
            'diego@example.com', 'natalia@example.com', 'ricardo@example.com', 'isabel@example.com', 'angel@example.com',
            'carolina@example.com', 'fernando@example.com', 'lorena@example.com', 'jorge@example.com', 'victoria@example.com',
            'alvaro@example.com', 'adriana@example.com', 'eduardo@example.com', 'mariajose@example.com', 'manuel@example.com',
            'andrea@example.com', 'gabriel@example.com', 'martina@example.com', 'guillermo@example.com', 'laura@example.com'
        ];

        foreach (range(0, 49) as $i) {
            Test::create([
                "name" => $names[$i],
                "lastname" => $lastnames[$i],
                "email" => $emails[$i],
            ]);
        }
    }
}
