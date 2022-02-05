<?php
//la utilizaremos para extraer los elementos de una array asociativo
$persona= array('nombre'=>'Nuria','año'=>'1993', 'pais'=>'España');
extract($persona);

echo 'Nombre: ' . $nombre;
echo '<br/>';
echo 'Año de nacimiento: ' . $año;
echo '<br/>';
echo 'País: ' . $pais;
echo '<br/>';

 //extraer el último elemento de un array
 
 $semana=['lunes', 'martes', 'miércoles', 'jueves','viernes', 'sábado', 'domingo'];
 
 $ultimoDia= array_pop($semana);

 foreach ($semana as $dia) {
 	echo $dia . '<br/>';
 }

 echo $ultimoDia;
 echo '<br/>';


 // esta función recibe dos parámetros, el primer parámetropuede recibir cualquier parámetro y el otro una variable que es nuestra array, y nos mostrará los datos separados por el elemento del primer parámetro
 echo join(' - ', $semana );
 echo '<br/>';



 //nos permite conocer cuantos elementos tenemos en nuestro array

 echo count($semana);
 echo '<br/>';

 //nos permite ordenar el array de forma ascendente, también tenemos  rsort() que ordena de forma descendente

 sort($semana);
 echo join(', ', $semana);
 echo '<br/>';

//vamos a guardar en una variable el array de forma invertida

 $semanaReverse= array_reverse($semana);
 echo join(', ', $semanaReverse);
 echo '<br/>';


?>