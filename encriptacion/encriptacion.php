<?php
$usuario = 'Juan';
$password = '12345567';
echo 'El usuario es : '.$usuario.'<br>';
echo 'El password es : '.$password.'<br>';

$password = '1234567';
$password = md5($password);
echo 'El usuario es : '.$usuario.'<br>';
echo 'El password es : '.$password.'<br>';

$password = '1234567';
$password = sha1($password);
echo 'El usuario es : '.$usuario.'<br>';
echo 'El password es : '.$password.'<br>';

$password = '1234567';
$password = hash('sha256',$password);
echo 'El usuario es : '.$usuario.'<br>';
echo 'El password es : '.$password.'<br>';


//$password=$_POST[' PASSWORD'];
//$password=hash('Sha256',$password);
 ?>
