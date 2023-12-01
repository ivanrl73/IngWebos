<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Inisesion.css')}}">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Usuario" required>
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>