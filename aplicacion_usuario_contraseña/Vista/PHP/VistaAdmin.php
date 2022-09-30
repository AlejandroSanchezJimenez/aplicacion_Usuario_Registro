<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/VistaAdmin.css">
    <title>VistaAdmin</title>
</head>
<body class="fondo">
    <div class="cuadro_login">
        <br>
        <p class="titulo">REGISTRO DE USUARIOS</p>
        <form class="formulario" method="post" action="../../Controlador/procesaRegistro.php">
            <br><br><br><br><br><br>
            <label class="user" for="user">Usuario</label> <br>
            <input name="user" type="text" size="20"> <br>
            <label class="contraseña" for="contraseña">Contraseña</label> <br>
            <input name="contraseña" type="password" size="20"> <br> <br>
            <label for="rol">Rol:</label><br>
            <label><input type="radio" name="rol" value="Administrador">Administrador</label>
            <label><input type="radio" name="rol" value="Usuario">Usuario</label><br><br>
            <input type="submit" value="Registrar">
        </form>
        </div>
</body>
</html>