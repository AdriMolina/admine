<?php
session_start;
if (isset($_SESSION['usuario'])){
  echo 'Tienes acceso a la zona restringida';
  echo $_SESSION['usuario'];
}else {
  echo 'No tienes una sesion activa'
}
 ?>
