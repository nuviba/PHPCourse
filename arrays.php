<?php
$semana =array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo');
echo 'El array tiene ' .  count($semana) . ' registros <br />';
$semana[7]='dia inventado';

//también podemos escribir así los arrays, más parecido a JS,
$array2=['Nuria','Héctor', 'Amparo'];

echo $semana[1]. ' y ' . $semana[7] . '<br />';


//conocer número de un array

echo 'El array tiene ' .  count($semana) . ' registros <br />';

//si queremos acceder al último registro de la array

$ultimo_dia=count($semana)-1;

echo $semana[$ultimo_dia];




?>