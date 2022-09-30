<?php
//obtenemos las variables nuevas
$nuevouser=$_POST['user'];
$nuevopass=$_POST['contraseña'];
$nuevorol=$_POST['rol'];
$array=array();
$newuser=($nuevouser.";".$nuevopass.";".$nuevorol.";");
var_dump($newuser);
$file=file_get_contents("../Modelo/Datos.txt");
file_put_contents("../Modelo/Datos.txt",$file.$newuser);
echo "../Modelo/Datos.txt";

?>