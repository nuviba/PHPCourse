<?php

$nombre='Pepa';

$persona =['telefono'=>'654654654','edad'=>25,'apellido'=>'Ballester','país'=>'México'];


echo $persona['edad'] . '<br />';

//cambiamos el núm de teléfono
$persona['telefono']='678678678';

echo 'El teléfono de ' . $nombre . ' es ' . $persona['telefono'];

?>