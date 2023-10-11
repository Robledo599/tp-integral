<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
    body{
    background-image: url(https://tipseducacion.com/wp-content/uploads/2014/04/video-juegos.jpg);
    background-repeat:no-repeat;
    background-size:cover;
    background-attachment: fixed;
    }
    .REG{
        background-color:rgba(247, 2, 2, 0.831);
        display: inline-block;
        padding: 10px;
        margin: 10px;
        border-radius: 15%;
        border: 3px solid rgb(255, 255, 255);
    }
    
    </style>
</head>
<body>

    <center>
    <div class="menu">
    <div class="REG">
    
    <h1><p>Registrate</p></h1>

    <form action="procesar.php" method="post">
    <br>
    <label>EMAIL</label>
    <br>
    <input type="email" id="correo" name="correo" required>
    <br><br>
    <label>CONTRASEÑA</label>
    <br>
    <input type="password" id="contraseña" name="contra" required>
    <br><br>
    <input type="submit" name="send" value="CONFIRMAR">
    <br>
 <br>
    <input type="button" name="redireccionar" value="INICIAR SESION" onclick="window.location.href = 'ini.php';">
</form>


    </div>
    </div>
    </center>

   

    <?php
        include("procesar.php")
    ?>
</body>
</html>