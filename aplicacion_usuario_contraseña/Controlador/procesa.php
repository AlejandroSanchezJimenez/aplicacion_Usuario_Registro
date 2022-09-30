<?php
    include ("../Helpers/Validadores.php");
    //obtenemos las variables de la vista anterior
    $usuario= $_POST['user'];
    $contraseña= $_POST['contraseña'];

    //obtenemos el array de la base de datos y separamos
    $string=file_get_contents("../Modelo/Datos.txt");
    $array=explode(";",$string);
    
    //creamos un bucle que recorre el array, una vez encuentre el usuario, nos quedamos con su índice y comprobamos su rol, para mandarlo a la página correspondiente
    for ($i=0;$i<count($array);$i++) {
        if ($array[$i]==$usuario) {
            if ($array[$i+2]=='Administrador') {
                header('Location: ../Vista/PHP/VistaAdmin.php');
                break;
            }
            else {
                header('Location: ../Vista/PHP/VistaUser.php?user='.$usuario.'&pass='.$contraseña);
                break;
            }
        }
    }

    //si el usuario no existe volvemos a la página de login
    if (!in_array($usuario,$array)) {
        header('Location: ../Vista/PHP/login.php');
        echo "<script>
                alert('Usuario incorrecto');
                window.location= 'Location: ../Vista/PHP/login.php'
            </script>";
    }
?> 