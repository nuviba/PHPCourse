<?php
//comparar expresiones
//operador de nave espacial es: <=>, compara entre dos números
//por pantalla nos devolverá la siguiente información:
//1 : si el valor de la izquierda es mayor que el de la derecha
//0 : si los valores son iguales
//-1 : si el valor de la derecha es mayor que el de la derecha
echo 5 <=> 1;
echo '<br/>';
echo 1 <=> 1;
echo '<br/>';
echo 1 <=> 5;
echo '<br/>';

$numeros=[3,1,5,6,7];

sort($numeros);
echo implode(' - ', $numeros);
echo '<br/>';

function comparar($a, $b){
	if($a==$b){
		return 0;
	}
	elseif ($a>$b) {
		return 1;
	}
	else{
		return -1;
	}

}

$a=2;

$b=1;

echo comparar($a,$b);
echo '<br/>';

function compararNE($a,$b){
	return $a <=>$b;
}

echo compararNE($a,$b);


?>