<?php
//cuando recibimos los datos introducidos por el user, se almacena en  un array

//print_r($_POST);

if(!$_POST){
	header('Location: http://localhost/PHPCourse/Section3-Form/');
}

	$nombre= $_POST['nombre'];
	$sexo=$_POST['sexo'];
	$year=$_POST['year'];
	$terminos=$_POST['terminos'];

	$años= 2022-$year;

	echo "Hola, " . $nombre .". Tienes " . $años . " años." ;

?>