<?php
$conexion;
$nombre = $_POST['Nombre'];
$email = $_POST ['E_mail'];
$asunto =$_POST['Asunto'];
$mensaje =$_POST['Mensaje'];

Conectarse();


function Conectarse (){
  $conexion=mysql_connect("localhost","root","");
  if(!$conexion){
    echo "Error conectando a la base de datos";
    exit();

  }
  if(mysql_select_db("contacto",$conexion)){
    $sql="INSERT INTO `datos`(`nombre`, `e_mail`, `asunto`, `mensaje`) VALUES ('".$_POST['Nombre']."','".$_POST['E_mail']."','".$_POST['Asunto']."','".$_POST['Mensaje']."')";
    mysql_query($sql, $conexion);
  }else{
    echo "Error seleccinando la base de datos";
}
    exit();
}


?>
