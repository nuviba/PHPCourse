<?php
/*
OPERADORES ARITMÉTICOS

+ SUMA
- RESTA
* MULTIPLICACIÓN
/ DIVISIÓN
% RESTO
*/

$numero=10;
$numero2=5;

$resultado=$numero + $numero2;

echo $resultado . '<br />';

/*
OPERADORES DE ASIGNACIÓN

= asignación
+=
-=
*=
/=

*/

$num=10;
$num2=5;

$num+=7;
echo $num . '<br />';



/*
OPERADORES COMPARACIÓN

== igualdad
=== idéntico, nos sirve, sobre todo, para nums enteros convertidos en string, comparamos tanto en valor como en tipo de dato
!=, <>
!==
>
<
>=
<=

*/
 
if($num==17){
	echo 'HOLA'.'<br />';
}


/*
OPERADORES LÓGICOS

and, &&
or, ||
xor
!
*/

/*
OPERADORES DE INCREMENTO/DECREMENTO

++$x
$x++
--sx
sx--
*/ 

$incremento=10;

//incrementamos el número en una unidad $numero++, funciona igual para decrementar --;

$incremento++; 
 echo $incremento . '<br />';

//también podemos hacer   ++$incremento;

 echo ++$incremento . '<br />';

//

/*
OPERADORES DE CADENAS, concatenar

.
.=
*/

$texto1='Hola';
$texto2='Caracola' . '<br />';

$texto3= $texto1 .' '.$texto2;

echo $texto3;

$text='Hasta';
$text .=' luego';

echo $text;




?>