<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="base_prueba";

$conexion = new mysqli($host,$usuario,$contraseña,$base);

if(!$conexion){
  die('Error de conexion: ' .mysqli_connect_error());
}else{
  mysqli_query($conexion, "SET Names 'utf8'");
}
?>
