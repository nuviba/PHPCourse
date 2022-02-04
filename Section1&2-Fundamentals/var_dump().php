<?php

$texto='Carlos';
$numero=10;
$numero2='5';
$datos=array('Carlos','César','Alejandro');
$datosAsociativos=['Nombre'=>'Nuria', 'Edad'=>'28'];
$bool=false;

//conocer el tipo de variable, el valor y darnos algunas propiedades

echo "<pre>";

var_dump($texto); //nos dice que es un string, el número de carácteres y el valor
var_dump($numero); //nos dice que es tipo int y el valor
var_dump($numero2);// nos dice que es un array de 3 y qué contiene el array
var_dump($datos);
var_dump($datosAsociativos);
var_dump($bool);

echo "</pre>";


?>