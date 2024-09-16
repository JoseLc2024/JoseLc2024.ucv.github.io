<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restaurante</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Restaurante Cumbre</h1>
        <form action="login.php" method="POST" onsubmit="return validarFormulario()">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu usuario">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
            </div>
            <div class="form-group">
                <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
        <div id="error-message" class="error-message"></div>
    </div>

    <script src="loginscripts.js"></script>
</body>
</html>

<?php
// Verificación del login (esto es un ejemplo básico)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validación de usuario y contraseña (cambiar por una validación real con base de datos)
    if ($username === 'admin' && $password === '1234') {
        echo '<p>Login exitoso</p>';
        // Redirigir a otra página o lógica adicional
    } else {
        echo '<script>document.getElementById("error-message").innerText = "Usuario o contraseña incorrectos";</script>';
    }
}
?>
