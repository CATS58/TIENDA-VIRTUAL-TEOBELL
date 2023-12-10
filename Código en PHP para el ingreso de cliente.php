<?php
session_start();

// Verificar si el cliente ya ha iniciado sesión
if (isset($_SESSION['cliente_id'])) {
    // El cliente ya está logueado, redireccionar al panel de control o a la página principal
    header('Location: panel_control.php');
    exit();
}

// Comprobar si se envió el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Obtener los datos ingresados por el cliente
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Aquí se debería realizar la validación de los datos ingresados
    
    // Simular comprobación de credenciales (ejemplo)
    if ($email === 'cliente@example.com' && $password === '123456') {
        // Guardar el ID del cliente en la sesión
        $_SESSION['cliente_id'] = 1;
        
        // Redireccionar al panel de control o a la página principal
        header('Location: panel_control.php');
        exit();
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error
        $error = "Credenciales inválidas. Inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ingreso de Cliente</title>
</head>
<body>
    <h1>Ingreso de Cliente</h1>
    
    <?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
    <?php } ?>
    
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>
        
        <button type="submit" name="login">Iniciar sesión</button>
    </form>
</body>
</html>