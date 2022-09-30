<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/VistaUser.css">
    <title>VistaUser</title>
</head>
<body class="fondo">
    <div class="entrada">
    <?php
    $usuario=$_GET("user");
    $contraseña=$_GET("pass");
    echo $usuario;
    echo "Bienvenid@ ".$usuario." con contraseña ".$contraseña;
    ?>
    </div>
</body>
</html>