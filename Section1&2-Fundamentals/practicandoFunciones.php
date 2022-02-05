<?php

//cálculo del área de un triángulo
// A=(B*A)/2

function calcularAreaTriangulo($base, $altura){
	$resultado=($base*$altura)/2;
	return $resultado;

}

$areaT= calcularAreaTriangulo(10,10);

echo "El área del triángulo es " . $areaT . ' metros cuadrados.';
?>