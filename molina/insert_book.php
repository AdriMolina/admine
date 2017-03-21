<html>
<head>
  <title>Interaccion Humano Computadora</title>
</head>
<body>
<h1>Interaccion Humano Computadora</h1>
<?php
  // create short variable names
  $nombre=$_POST['Apellidos'];
  $email=$_POST['email'];
  $nombreUsuario=$_POST['NombreUsuario'];
  $password=$_POST['Password'];
  $admin_priv=$_POST['n'];
  $validar=$_POST[0];


  if (!$nombre || !$email || !$nombreUsuario || !$password)
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
  }
  if (!get_magic_quotes_gpc())//elimina o busca los caracteres que puedan afectar
  {
    $nombre = addslashes($nombre);
    $email = addslashes($email);
    $nombreUsuario = addslashes($nombreUsuario);
    $password = doubleval($password);
  }

  //@ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
  //@ $db = new mysqli('localhost', 'root', '', 'books');
  $db = new mysqli('localhost', 'root', '', 'books');

  if ($db->connect_error) {
    die('Error de Conexión (' . $db->connect_errno . ') '
            . $db->connect_error);
}

 /* if (mysqli_connect_errno())
  {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  } */

  $query = "insert into books values
            ('".$isbn."', '".$author."', '".$title."', '".$price."')";
  $result = $db->query($query);
  if ($result)
      echo  $db->affected_rows.' Libro insertado en la base de datos.';

  $db->close();
?>
</body>
</html>
