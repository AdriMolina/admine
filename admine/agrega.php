<html>
<head>
  <title>Registro de productos</title>
</head>
<body>
<h1>Registro de Productos</h1>
<?php
  // create short variable names
  $id=$_POST['id'];
  $descripcion=$_POST['descripcion'];
  $precio=$_POST['precio'];
  $categoria=$_POST['categoria'];

  /*if (!descripcion || !precio ||!categoria )
  {
     echo 'Tu debes completar los campos antes de agregar el registro.<br />'
          .'Por favor vuelve a intentarlo.';
     exit;
*/
  if (!get_magic_quotes_gpc())
  {
    $id= addslashes($id);
    $descripcion = addslashes($descripcion);
    $precio = addslashes($precio);
    $categoria = addslashes($categoria);
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

 $query = "insert into productos values
           ('".$id."','".$descripcion."', '".$precio."','".$categoria."')";

 $result = $db->query($query);
 if ($result)
     echo  $db->affected_rows.' Acceso Autorizado.';

 $db->close();
?>
</body>
</html>
