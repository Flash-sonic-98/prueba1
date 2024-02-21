<?php
$V = $_GET ['num1'];
$P = $_GET ['num2'];
$T = $_GET ['num3'];
$d = 2000;
$s = 5000;
$y = 500;
echo "los volantes cuestan en total " , $V * $d ;
echo "los poster cuestan en total " , $P * $s ;
echo "las tarjetas cuestan en total", $T * $y ;
echo "el total a pagar son ", $V * $d + $P * $s + $T * $y ; 
?>