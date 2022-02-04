<?php

$meses= array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

//Array asociativo

$persona= array(
'Nombre'=>'Nuria',
'Año de nacimiento'=>'1993',
'País'=>'España'
);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foreach</title>
</head>
<body>
<h1>Meses</h1>
<ul>
	<?php
		foreach($meses as $mes){
			echo '<li>'.$mes.'</li>';			
		}
	?>
</ul>

<h1>Ficha</h1>
<ul>
	<?php
		foreach($persona as $dato => $valor){
			echo '<li>'.$dato . ' : '. $valor.'</li>';			
		}
	?>
</ul>

</body>
</html>



