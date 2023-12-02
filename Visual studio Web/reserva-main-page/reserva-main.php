<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas de Restaurante</title>
    <link rel="stylesheet" href="styles-reserva-main.css">
</head>
<body>
    <div class="container">
        <?php
        // Verificar si el usuario tiene una reserva
        $tieneReserva = true; 
        if ($tieneReserva) {
            // Detalles de la reserva segun usaurio
            echo '<h1>Tu Reserva</h1>';
            echo '<p>Nombre: Juan Perez</p>';
            echo '<p>Fecha: 10 de diciembre de 2023</p>';
            echo '<p>Hora: 19:00</p>';
        } else {
            // Mensaje si no hay reserva
            echo '<h1>No has realizado ninguna reserva</h1>';
        }
        ?>
    </div>
</body>
</html>
