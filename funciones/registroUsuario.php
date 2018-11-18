<?php 
$canal=pg_connect("host='ec2-50-19-249-121.compute-1.amazonaws.com' dbname='daelhojd6ki8ok' port=5432 user='cldhqhqnxxwdcs' password='36ee4401ef33f87cbdd7b865a527cf65ec27607b0cac83778d82e62ce3726396'"); 


  $nombre =  $_POST["nombreRegistro"];
  $apellido = $_POST['apellidoRegistro'];
  $correo = $_POST['correoRegistro'];
  $fecha = $_POST['fechaNacRegistro'];
  $validacionFecha = explode('/',$fecha);
  $contrasenha = $_POST['contrasenhaRegistro'];
  $contrasenha2 = $_POST['contrasenhaRegistro2'];

  $errores = array();

//                    Validaciones

if(empty($nombre)){
	array_push($errores,"Nombre no puede estar vacio");
}

if(empty($apellido)){
	array_push($errores,"Apellido no puede estar vacio");
}

if(empty($correo)){
	array_push($errores,"Correo no puede estar vacio");
}

/*if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
     echo "Esta direccion de Correo es invalida";  
 }
 else{
 	echo "Esta dirección de correo ".($correo)." es válida.";
 } */

if(empty($contrasenha)){
	array_push($errores,"Contraseña no puede estar vacio");
}

if(empty($contrasenha2)){
	array_push($errores,"Validar Contraseña no puede estar vacio");
}

if((count($validacionFecha)==3) and (checkdate($validacionFecha[0],$validacionFecha[1],$validacionFecha[2]))){
	array_push($errores,"Debe colocar alguna fecha valida");
} 

if($contrasenha!=$contrasenha2){
	array_push($errores, "Las contraseñas no coinciden");
} 

//                  Registro de Usuario
if(count($errores) == 0){
	 $usuario = "INSERT INTO usuario(nombre, apellido, correo, contrasenha, fecha_nacimiento ) VALUES ('$nombre', '$apellido', '$correo', '$contrasenha', '$fecha') ";
     $alertas = pg_query($usuario); 
     echo 'Registro Satisfactorio';
    if(!$alertas){
      echo "Ocurrio un error= " .  pg_last_error();
    }
}
else{
	echo 'No se pudo registrar       '; 
	foreach ($errores as $key => $value) {
		echo $errores[$key];
	}
}

?>

<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stellar - Registro</title>
    <link rel="shortcut icon" href="pics/stellar-rocket-300.png">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Stellar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>
<body>


<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Stellar 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
