<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>

	<form action="recibe.php" method="post" >
		<!--con action podemos especificar dónde queremos enviar nuestros datos--> 
		<input type="text" placeholder="Nombre" name='nombre'>
		<br>

		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="hombre" id="hombre">
		<!--con name pasamos los valores-->
		
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="mujer" id="mujer">
		<br>
		
		<select name="year" id="year">
			<option ></option>
			<option value="1990">1990</option>
			<option value="1991">2001</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			
		</select>
		<br>

		<label for="terminos">Acepta todos los términos</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>

		<input type="submit" value="Enviar">
	</form>


</body>
</html>