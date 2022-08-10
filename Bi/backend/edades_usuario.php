<?php

include("conexion.php");
$resAlumnos=$conexion->query("SELECT Edad FROM usuarios");
$_1=0;
$_2=0;
$_3=0;
$_4=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

				while ($datos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
          if($datos[0] >= 18 && $datos[0] <= 25){
            $_1++;
          }
          if($datos[0] >= 26 && $datos[0] <= 35){
            $_2++;
          }
          if($datos[0] >= 36 && $datos[0] <= 45){
            $_3++;
          }
          if($datos[0] >= 45 && $datos[0] <= 60){
            $_4++;
          }
				}
				echo $_1.' '.$_2.' '.$_3.' '.$_4;

 ?>
