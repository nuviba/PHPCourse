<?php

//nos permite especificar el tipo de dato que queremos regreasr

declare(strict_types=1);

function obtenerEdad() : int{  //con :int le decimos que obligatoriamente nos muestre un número entero
	$edad= 23;
	return $edad;
}
//queremos que la función nos devuelva un número entero

echo obtenerEdad();

?>