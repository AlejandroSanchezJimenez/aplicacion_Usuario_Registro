<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/loginCSS.css">
    <title>SAC - Servicio de autentificación centralizado</title>
</head>
<body class="fondo">
    <div class="cuadro_login">
    <form class="formulario" method="post" action="../../Controlador/procesa.php">
            <br><br><br><br><br><br><br><br><br><br>
            <label class="user" for="user">Usuario</label> <br>
            <input name="user" type="text" size="20"> <br>
            <label class="contraseña" for="contraseña">Contraseña</label> <br>
            <input name="contraseña" type="password" size="20"> <br> <br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    
</body>
</html>