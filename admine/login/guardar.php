<?php
    include('conexion.php');	//Inicia conexion a MySql
	$nombre = $_POST["nick"];
	$email = $_POST["mail"];  //Saca los datos necesarios para poderlos registrar
	$pwd1 = $_POST["contra1"];
	$pwd2 = $_POST["contra2"];
	
	if ($pwd1 == $pwd2)	//Compara si las contraseñas son iguales, si es asi, procede a insertar los datos a la base
	{
		$cmd = "INSERT INTO usuario(nick, email, pwd, id_permiso) values('$nombre','$email','$pwd1',1);";
		$link =Conectarse();	
		$datos = mysql_query($cmd, $link);
		mysql_close($link);
		echo "Registro correcto! Regrese para entrar con su correo y su contraseña"; //Da el mensaje que se hizo de la manera correcta
	}
	else  //Si no coinciden las contraseñas, manda un mensaje de error y no registra nada
	{
		mysql_close($link);
		header('location: registro.php?ERROR=ERROR');
	}
	
?>