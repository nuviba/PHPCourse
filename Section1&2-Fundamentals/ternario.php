<?php

//isset(var) nos va a devolver true o false, dependiendo de si esta variable tiene algún valor o no

//$edad=18;
//echo isset($edad);

$edad=18;
$edad=(isset($edad)) ? $edad : 'No se ha introducido la edad' ;
// si la condición se cumple,muestra la edad, si no, muestra el string


echo 'Edad: ' . $edad;




?>