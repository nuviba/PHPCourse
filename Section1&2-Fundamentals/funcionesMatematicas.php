<?php

//esta función nos permite redondear un número, si queremos que muestre un decimal, le pondremos un parámetro
$numero =15.785;

echo round($numero);
echo '<br/>';
echo round($numero, 1);
echo '<br/>';
echo round($numero, 2);
echo '<br/>';

//nos permite obtener un número al azar entre dos números, le tenemos que poner dos parámetros el primero desde donde queremos que empieze hasta donde queremos que termine

echo rand(1, 10);
echo '<br/>';

//nos permite redondear un número hacia arriba

echo ceil(12.1);
echo '<br/>';

?>