<?php

include("conexion.php");
///Primer querie
$masculinos=$conexion->query("SELECT Genero FROM usuarios");
$hombre=0;
$mujer=0;

$por_hombre=0;
$por_mujer=0;

///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
while ($datos = $masculinos->fetch_array(MYSQLI_BOTH)){
  if($datos[0] == 'Hombre'){
    $hombre++;
  }
  if($datos[0] == 'Mujer'){
    $mujer++;
  }

}

$total = $mujer + $hombre;

$por_hombre= round(($hombre * 100)/$total);
$por_mujer= round(($mujer * 100)/$total);


if($por_mujer <= 30){
  echo '
    <p>Femenino <span class="label-percent">'.$por_mujer .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="'.$por_mujer.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_mujer.'%">
        <span class="sr-only">'.$por_mujer.' Complete</span>
      </div>
    </div>
  ';

}

if($por_mujer <= 70 && $por_mujer >= 31){
  echo '
    <p>Femenino <span class="label-percent">'.$por_mujer .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="'.$por_mujer.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_mujer.'%">
        <span class="sr-only">'.$por_mujer.' </span>
      </div>
    </div>
  ';

}

if($por_mujer >= 71){
  echo '
    <p>Femenino <span class="label-percent">'.$por_mujer .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$por_mujer.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_mujer.'%">
        <span class="sr-only">'.$por_mujer.' </span>
      </div>
    </div>
  ';

}



 ?>
