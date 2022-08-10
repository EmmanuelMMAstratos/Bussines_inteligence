<?php

include("conexion.php");
///Primer querie
$resAlumnos=$conexion->query("SELECT * FROM dispositivos");
$cc=0;
$rj=0;
$am=0;
$si=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

				while ($datos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{

          if($datos[1] == 'Canal del Clima'){
            $cc++;
          }

          if($datos[1] == 'Reloj inteligente'){
            $rj++;
          }

          if($datos[1] == 'App Meteorol?gica'){
            $am++;
          }

          if($datos[1] == 'Sitio Web/App Independiente'){
            $si++;
          }
				}



				echo $rj.' '.$am.' '.$si.' '.$cc;
      //  echo 'NORTE = '.$norte.' , PACÍFICO = '.$pacifico.' , MEDIO = '.$medio.' , SUR = '.$sur;




 ?>
