<?php

//INCLUDE => inbserta en nuestro programa un código que procede de otro archivo, en caso de que el archivo no exista o tenga enrrores, nuestro programa mostrará un warning pero seguirá funcionando. Lo utilizaremos cuando consideremos que el archivo no es sumamente importante∫

//REQUIRE=> funcionan de forma similar, pero si el archivo no existe o contiene errores, nuestro programa no funcionará y obtendremos un fatal error en log

function suma($num1, $num2){
	return $num1 + $num2;
}

include 'index.view.php';
include 'index.view.php';
include 'index.view.php';
//si utilizamos include_once o require_once nos ejecutará el código solamente una vez
?>
