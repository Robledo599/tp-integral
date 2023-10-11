<?php
include("conexion.php");

if(isset($_POST['send'])){

    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contra']);

    // Verifica si el correo ya existe en la base de datos
    $verificar_query = "SELECT email FROM usuarios WHERE email = '$correo'";
    $verificar_resultado = mysqli_query($conex, $verificar_query);

    if (mysqli_num_rows($verificar_resultado) > 0) {
        echo '<h3 class="error">Este correo ya está registrado.</h3>';
    } else {
        if (
            strlen($correo) >= 1 &&
            strlen($contraseña) >= 1
        ) {
            // El correo no existe en la base de datos, puedes proceder con la inserción
            $consulta = "INSERT INTO usuarios (email, contraseña) VALUES ('$correo', '$contraseña')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                include("ini.php");
            } else {
                echo '<h3 class="error">Error en la inserción de datos</h3>';
            }
        } else {
            echo '<h3 class="error">Por favor, completa todos los campos.</h3>';
        }
    }
}
?>
