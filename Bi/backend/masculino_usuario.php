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
$por_mujer= ($mujer * 100)/$total;


if($por_hombre <= 30){
  echo '
    <p>Masculino <span class="label-percent">'.$por_hombre .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="'.$por_hombre.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_hombre.'%">
        <span class="sr-only">'.$por_hombre.' Complete</span>
      </div>
    </div>
  ';

}

if($por_hombre <= 70 && $por_hombre >= 31){
  echo '
    <p>Masculino <span class="label-percent">'.$por_hombre .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="'.$por_hombre.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_hombre.'%">
        <span class="sr-only">'.$por_hombre.' Complete</span>
      </div>
    </div>
  ';

}

if($por_hombre >= 71){
  echo '
    <p>Masculino <span class="label-percent">'.$por_hombre .' %</span></p>
    <div class="progress progress-xs">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="'.$por_hombre.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$por_hombre.'%">
        <span class="sr-only">'.$por_hombre.' Complete</span>
      </div>
    </div>
  ';

}



 ?>
