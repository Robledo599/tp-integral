<?php
include("conexion.php");

if(isset($_POST['correo']) && isset($_POST['contraseña'])) {
    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contraseña']);

    // Realiza una consulta SQL para verificar las credenciales del usuario
    $consulta = "SELECT * FROM usuarios WHERE email = '$correo' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conex, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        // Las credenciales son correctas, el usuario ha iniciado sesión con éxito
        // Puedes redirigir al usuario o mostrar un mensaje de éxito
        // Por ejemplo, redirección a la página de inicio
        header('Location: inicio.html');
        exit(); // Asegúrate de que no se procese más código después de la redirección
    } else {
        echo '<h3 class="error">Credenciales incorrectas</h3>';
    }
} else {
    echo '<h3 class="error">Por favor, completa todos los campos.</h3>';
}
?>
