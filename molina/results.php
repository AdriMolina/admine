<html>
<head>
  <title>Interaccion Humano Computadora</title>
</head>
<body>
<h1>Interaccion Humano Computadora</h1>
<?php
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=$_POST['searchterm'];

  $searchterm= trim($searchterm);

  if (!$searchtype || !$searchterm)
  {
     echo 'No has introducido los detalles de la búsqueda..  Intentalo de nuevo.';
     exit;
  }
  
  if (!get_magic_quotes_gpc())
  {
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

 /* @ $db = new mysqli('localhost', 'bookorama', 'bookorama123', 'books');

  if (mysqli_connect_errno()) 
  {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }*/
  $db = new mysqli('localhost', 'root', '', 'books');
  
  if ($db->connect_error) {
    die('Error de Conexión (' . $db->connect_errno . ') '
            . $db->connect_error);
  }

  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  echo '<p>Número de libros encontrados: '.$num_results.'</p>';

  for ($i=0; $i <$num_results; $i++)
  {
     $row = $result->fetch_assoc();
     echo '<p><strong>'.($i+1).'. Title: ';
     echo htmlspecialchars(stripslashes($row['title']));
     echo '</strong><br />Author: ';
     echo stripslashes($row['author']);
     echo '<br />ISBN: ';
     echo stripslashes($row['isbn']);
     echo '<br />Price: ';
     echo stripslashes($row['price']);
     echo '</p>';
  }
  
  $result->free();
  $db->close();

?>
</body>
</html>
