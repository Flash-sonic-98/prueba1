<?php
$nombre = $_GET['num4'];
$materia = $_GET['num5'];
  $N1 = $_GET ['num1'];
  $N2 = $_GET  ['num2'];
  $N3 = $_GET  ['num3'];
  $promedio = ($N1+$N2+$N3)/3;
  echo "Nombre : $nombre,","materia : $materia ,","Promedio:" , $promedio;
?>