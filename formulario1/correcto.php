
<html>
<head>
  <title>Interaccion Humano Computadora</title>
</head>
<body>
<h1>Interaccion Humano Computadora</h1>
<?php
  // create short variable names
  $nombre=$_POST['nombre'];
  $password=$_POST['password'];


//  if (!$nombre || !$password)
  //{
    // echo 'Tu debes completar los campos antes de agregar el registro.<br />'
      //    .'Por favor vuelve a intentarlo.';
     //exit;
  //}
  if (!get_magic_quotes_gpc())
  {
    $nombre = addslashes($nombre);
    $password = addslashes($password);

  }

  //@ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
  //@ $db = new mysqli('localhost', 'root', '', 'books');
  $db = new mysqli('localhost', 'root', '', 'nombre');

  if ($db->connect_error) {
    die('Error de Conexión (' . $db->connect_errno . ') '
            . $db->connect_error);
}

 /* if (mysqli_connect_errno())
  {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  } */

  $query = "insert into nombres values
            ('".$nombre."', '".$password."')";
  $result = $db->query($query);
  if ($result)
      echo  $db->affected_rows.' Libro insertado en la base de datos.';

  $db->close();
?>
</body>
</html>
