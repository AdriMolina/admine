

<?php
session_start();

if(isset($_POST['userid'])&& isset($_POST['password'])){
$userid = $_POST['userid'];
$password = $_POST['password'];
}
if (@$userid && $password)
{
  $db_conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($db_conn,"auth");
 /* $query = "select * from authorised_user "
           ."where name='$userid' "
           ." and password='$password')";*/
	$query = "select * from authorised_user where name='$userid' and password='$password'";
  $result = mysqli_query($db_conn,$query);
  if (@mysqli_num_rows($result) >0 )
  {

	$_SESSION['valid_user'] = $userid;
    
  }
}
?>

<html>
<body>
<h1>Pagina Inicio</h1>
<?php

  if (isset($_SESSION['valid_user']))
  {
    echo "Ahora estas logged in como: ".$_SESSION['valid_user']."<br>" ;
    echo "<a href=\"logout.php\">Log out</a><br>";
  }
  else
  {
    if (isset($userid))
    {
      // si han intentado hacer login y ha fallado
      echo "No has podido hacer login";
    }
    else
    {
      // si no han intentado hacer login  y no han hecho logged out
      echo "No has hecho logged in.<br>";
    }
	// provee el formulario para hacer  log in
  }
?>
    
    <form method=post action="authmain.php">
    <table>;
    <tr><td>Usuario</td>"
    <td><input type=text name=userid></td></tr>
    <tr><td>Password</td>"
	<td><input type=password name=password></td></tr>
    <tr><td colspan=2 align=center>
    <input type=submit value="Log in"></td></tr>
    </table></form>
  
<br>
<a href="members_only.php">Seccion de Miembros</a>
</body>
</html>