<?php 
$canal=pg_connect("host='ec2-50-19-249-121.compute-1.amazonaws.com' dbname='daelhojd6ki8ok' port=5432 user='cldhqhqnxxwdcs' password='36ee4401ef33f87cbdd7b865a527cf65ec27607b0cac83778d82e62ce3726396'");

$correo= $_POST['correoRegistro'];
$contrasenha= $_POST['contrasenhaRegistro'];
$errores= array();

$canal = pg_query("SELECT * FROM usuario WHERE correo='$correo' AND contrasenha='$contrasenha'");

if(empty($correo)){
	array_push($errores,"Nombre no puede estar vacio");
}

if(empty($contrasenha)){
	array_push($errores,"Nombre no puede estar vacio");
}

if (count($errores) == 0) {
  	if (pg_num_rows($results) == 1) {
  	  $usuario = pg_fetch_array($canal);
  	  $_SESSION['correo'] = $usuario['correo'];
  	}else {
  		array_push($errors, "Error, correo o contraseña erroneos");
  	}
  }

pg_close($canal);

?>