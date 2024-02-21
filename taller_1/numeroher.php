<?php

$h = $_GET ['num1'];
$b = $_GET ['num2'];
$d = $h - $b;

if($h>$b){
    if($h>$b){
        echo " akari tiene ", $h , " años ", " se llevan ", $d , " años de diferencia ";
    }else{
        echo " nonoka tiene ", $b , " años ", " se llevan ", $d , " años de diferencia ";
    }
}//else{
//         if($b>$h){
//             echo " nonoka tiene ", $b , " años ", " se llevan ", $d , " años de diferencia ";
//         }else{
//             echo " akari tiene ", $h , " años ", " se llevan ", $d , " años de diferencia ";
//         }
//     }
?>