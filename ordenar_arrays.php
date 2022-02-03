<?php
$meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

//función sort+ parámetro- Ordena de A-Z
//sort($meses);
//función rsort+ parámetro- Ordena de Z-A
rsort($meses);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php
		foreach ($meses as $mes) {
			echo '<li>' . $mes . '</li>';
		}
		?>
	</ul>

</body>
</html>