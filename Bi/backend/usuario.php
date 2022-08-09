<?php

include("conexion.php");
$resAlumnos=$conexion->query("SELECT * FROM dispositivos");
$nume=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
          $nume++;
				}
				echo $nume;

 ?>
