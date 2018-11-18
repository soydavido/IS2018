<?php 
/*
$canal=pg_connect("host='ec2-50-19-249-121.compute-1.amazonaws.com' dbname='daelhojd6ki8ok' port=5432 user='cldhqhqnxxwdcs' password='36ee4401ef33f87cbdd7b865a527cf65ec27607b0cac83778d82e62ce3726396'");
*/

  $nombre =  $_POST["nombreRegistro"];
  echo $nombre;
  $apellido = $_POST['apellidoRegistro'];
  $correo = $_POST['correoRegistro'];
  $fecha = $_POST['fechaNacRegistro'];
  $validacionFecha = explode('/',$fecha);
  $contrasenha = $_POST['contrasenhaRegistro'];
  $contrasenha2 = $_POST['contrasenhaRegistro2'];

   $errores = array();

echo $nombre;
echo $apellido;
echo $correo;
echo $fechaNac;
echo $contrasenha;
echo $contrasenha2;

if(empty($nombre)){
	array_push($errores,"Nombre no puede estar vacio");
}

if(empty($apellido)){
	array_push($errores,"Apellido no puede estar vacio");
}

if(empty($correo)){
	array_push($errores,"Correo no puede estar vacio");
}

if(empty($contrasenha)){
	array_push($errores,"Contrasenha no puede estar vacio");
}

if(empty($contrasenha2)){
	array_push($errores,"Contrasenha no puede estar vacio");
}

//if((count($validacionFecha)==3)&&(checkdate(&validacionFecha[0],$validacionFecha[1],$validacionFecha[2]))){
//	array_push($errores,"Debe colocar alguna fecha valida");
//} 


if(contrasenhaRegistro!=contrasenhaRegistro2){
	array_push($errores, "Las contraseñas no coinciden");
}

//if(count($errores) == 0){
//	$sql= "INSERT INTO usuario (nombre,apellido,correo,contrasenha,fechaNacRegistro)
//	VALUES ($nombreRegistro,$apellidoRegistro,$correoRegistro,contrasenhaRegistro)"
//}

echo $nombre;
echo $apellido;
echo $correo;
echo $fechaNac;
echo $contrasenha;
echo $contrasenha2;

*/

?>

<!DOCTYPE html>
<html>
<body>

</body>
</html>