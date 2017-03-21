<?php
session_start();
$sesionUsuario='Juan';
$_SESSION['usuario']=$sesionUsuario;
echo "La sesión se ha activado";
 ?>
