<?php

$v = $_GET ['num1'];
$p = $_GET ['num2'];
$t = $_GET ['num3'];
$d = 2000;
$s = 5000;
$y = 500;
echo " los volantes cuestan en total ", $v * $d ;
echo " los posters cuestan en total ", $p * $s ;
echo " las tarjetas cuestan en total ", $t * $y ;
echo " el total a pagar son ", $v * $d + $p * $s + $t * $y ;
?>