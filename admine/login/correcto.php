<html>
<head>
  <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php
  // create short variable names
  $nombre=$_POST['nombre'];
  $contraseña=$_POST['contraseña'];
  if (!$nombre || !$contraseña )
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
  }
  if (!get_magic_quotes_gpc())
  {
    $nombre = addslashes($nombre);
    $contraseña = addslashes($contraseña);

  }
  //@ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');
  //@ $db = new mysqli('localhost', 'root', '', 'books');
  $db = new mysqli('localhost', 'root', '', 'admine');

  if ($db->connect_error) {
    die('No autorizado (' . $db->connect_errno . ') '
            . $db->connect_error);
}
/* if (mysqli_connect_errno())
 {
    echo 'Error: Could not connect to database.  Please try again later.';
    exit;
 } */

 $query = "select count(*) from roles where
              nombre='$nombre' and password='$contraseña'";
$result=mysqli_query($db , $query);
if(!$result)
{
  echo 'Cannot run query.';
  exit;
}
$row=mysqli_fetch_row($result);
$count=$row[0];

if( $count > 0)
{
  echo '<h1>¡Here it is! </h1>';
  echo ' I bet you are glad you can see this secret page';
}else{
  echo ' <h1>  ¡Go away! </h1>';
  echo ' you are not authorized to view to view this resource.';
}

?>
</body>
</html>
