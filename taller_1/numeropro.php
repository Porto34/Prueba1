<?php

$n = $_GET ['num1'];
$a = $_GET ['num2'];
$b = $_GET ['num3'];
$nombre = $_GET ['num4'];
$asignatura = $_GET ['num5'];
$d = ($n+$a+$b)/3;
echo " Nombre: $nombre " , " Asignaura: $asignatura " , " Promedio: $d ";
?>