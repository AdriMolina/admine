<html>
<head>
</head>
<body>
<?php
session_start(); //Comienza la conexion a MySql
	include('conexion.php'); //Manda llamar a la funcion que hace la conexion a la base de datos
		$email = $_POST['mail']; //Mediante la forma POST, se hace llamar a los datos necesarios para la consulta
		$pwd = $_POST['contra'];
		
		$cmd = "SELECT nick FROM usuario WHERE email='$email' AND pwd='$pwd'"; //Se hace la consulta para obtener el nombre
		$link=Conectarse();
		$datos= mysql_query($cmd, $link);		//Se conecta a la base, se saca el nombre (si existe) y se le asigna a una variable
		$resultado = mysql_fetch_array($datos);		
		$nombre = $resultado["nick"];
		
		mysql_close($link); //Se cierra la conexion a MySQL
		if($nombre=="") //Se compara, si la base no arrojo un nombre, se manda el mensaje de error
		{
		 $nombre= "No existe el usuario";
		 header('location: index.php?ERROR=ERROR');
		}
		else		//Si la base arrojo un nombre, la pagina le da la bienvenida
		{
			echo "Hola " .$nombre. ", Bienvenido!";
			/*
			$_SESSION["registrado"]="SI";
			$_SESSION["usuario"]=$id;
			header('location: index.php');*/
		}
	
?>
</body>
</html>