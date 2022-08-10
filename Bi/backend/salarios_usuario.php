<?php

include("conexion.php");
///Primer querie
$resAlumnos=$conexion->query("SELECT Salario FROM usuarios");
$_1=0;
$_2=0;
$_3=0;
$_4=0;
$_5=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

				while ($datos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
          //echo $datos[0].'<br>';

          if($datos[0] >= 171000 && $datos[0] <= 200000){
            $_1++;
          }

          if($datos[0] >= 101000 && $datos[0] <= 170999){
            $_2++;
          }
          if($datos[0] >= 61000 && $datos[0] <= 100999){
            $_3++;
          }
          if($datos[0] >= 26000 && $datos[0] <= 60999){
            $_4++;
          }
          if($datos[0] >= 10000 && $datos[0] <= 25999){
            $_5++;
          }


				}



				echo $_1.' '.$_2.' '.$_3.' '.$_4.' '.$_5;
      //  echo 'NORTE = '.$norte.' , PACÍFICO = '.$pacifico.' , MEDIO = '.$medio.' , SUR = '.$sur;




 ?>
