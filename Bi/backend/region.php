<?php

include("conexion.php");
///Primer querie
$resAlumnos=$conexion->query("SELECT * FROM usuarios where Region='Norte'");
$norte=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
				{
          $norte++;
				}


  //segundo querie

  $resAlumnos=$conexion->query("SELECT * FROM usuarios where Region='Pacifico'");
  $pacifico=0;

  ///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

  				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
  				{
            $pacifico++;
  				}

  //Tercer querie

    $resAlumnos=$conexion->query("SELECT * FROM usuarios where Region='Medio'");
    $medio=0;

    ///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

    				while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
    				{
              $medio++;
    				}

  //cuaro querie
  $resAlumnos=$conexion->query("SELECT * FROM usuarios where Region='Sur'");
  $sur=0;

  ///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////

          while ($filaAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH))
          {
            $sur++;
          }

				echo $norte.' '.$pacifico.' '.$medio.' '.$sur;
      //  echo 'NORTE = '.$norte.' , PACÍFICO = '.$pacifico.' , MEDIO = '.$medio.' , SUR = '.$sur;




 ?>
