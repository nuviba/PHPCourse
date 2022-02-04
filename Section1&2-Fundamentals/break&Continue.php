<?php
$paises=['España','Francia','Italia','Suiza','Alemania','México'];

foreach ($paises as $pais) {
	echo $pais . '<br/>';

	if( $pais == 'Suiza'){
	break;
}
}
?> <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paises</title>
</head>
<body>
	<h1>
		Países Europeos
	</h1>
	<?php
		foreach($paises as $pais){
			
			if ($pais =='México'){
				continue;
			}

			echo $pais . '<br/>';

		}
	?>
</body>
</html>