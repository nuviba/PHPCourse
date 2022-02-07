<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>

	<form action="recibe.php" method >
		<!--con action podemos especificar dónde queremos enviar nuestros datos--> 
		<input type="text" placeholder="Nombre" name='nombre'>
		<br>

		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" value="Hombre" id="hombre">
		<!--con name pasamos los valores-->
		
		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" value="Hombre" id="mujer">
		<br>
		
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
		</select>
		<br>

		<label for="terminos">Acepta todos los términos</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>

		<input type="submit" value="Enviar">
	</form>


</body>
</html>