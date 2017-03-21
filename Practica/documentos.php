<?php
session_start();
if (isset($_SESSION['USUARIO'])) {
  echo 'Tienes acceso a la zona restringida';

}else {
  echo 'No tienes una sesion activa';

}




 ?>
