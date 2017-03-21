<html>
<head>
	<title> Registro de cuenta </title> <!-- El título de la pagina -->
</head>

<body>
	<form method="post" action="guardar.php"> <!-- Se inicia un formulario para enviar a guardar datos si es el caso -->
	<table> <!-- Se abre una tabla con cinco filas para colocar un formulario sencillo -->
		<tr>
			<th align = "left">
				Nombre: <input type="text" name="nick" size="30" maxlength="30" /> <!-- Caja de texto para colocar el nombre o nick -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Email: <input type="text" name="mail" size="30" maxlength="30" /> <!-- Caja de texto para colocar el correo -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Password: <input type="password" name="contra1" size="12" maxlength="12" /> <!-- Caja de password -->
			</th>
		</tr>
		<tr>
			<th align = "left">
				Repetir Password: <input type="password" name="contra2" size="12" maxlength="12" /> <!-- Caja de password de verificacion-->
			</th>
		</tr>
		<tr align = "center">
			<th>
				<input type="submit" value="Registrar" name="registrar"/> <!-- Boton que manda verificar la informacion -->
			</th>
		</tr>
	</table>
	</form>
	
	<?php					
		if(isset($_GET["ERROR"])=="ERROR")
		{
		?>
		<script type ="text/javascript">
			alert("NO COINCIDEN LAS CONTRASEÑAS");
		</script>
		
		<?php
		}
	?>
</body>

</html>