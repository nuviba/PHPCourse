<?php
//nos permite convertir carácteres especiales en entidades HTML para que no se ejecuten y el usuario no pueda ejecutar código


$texto='< > & "" ';

echo htmlspecialchars($texto);
echo '<br/>';

//------------------------------------------------------------------------------------------------------------------

//nos permite eliminar los espacios en blanco que estén al inicio y al final de la cadena de texto
$saludo=' Hola Caracola ';
echo trim($saludo);
echo '<br/>';

//------------------------------------------------------------------------------------------------------------------

//nos permite calcular el tamaño de una cadena de texto

echo strlen($saludo);
echo '<br/>';

//------------------------------------------------------------------------------------------------------------------
//nos devuelve un trozo de línea de una cadena de texto

$frase='Hoy hace un día soleado';

echo substr($frase, 0 , 3);
echo '<br/>';

//------------------------------------------------------------------------------------------------------------------
//nos permite converitr nuestros carácteres en mayúsculas y en minúsculas

echo strtoupper($frase) ;
echo '<br/>';
echo strtolower($frase) ;
echo '<br/>';

//------------------------------------------------------------------------------------------------------------------
//nos permite saber en qué posición de la cadena de texto dónde se encuentra una letra

echo strpos($frase, 's');




?>