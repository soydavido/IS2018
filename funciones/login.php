<?php 
$canal=pg_connect("host='ec2-50-19-249-121.compute-1.amazonaws.com' dbname='daelhojd6ki8ok' port=5432 user='cldhqhqnxxwdcs' password='36ee4401ef33f87cbdd7b865a527cf65ec27607b0cac83778d82e62ce3726396'");

$correo= $_POST['correoIniciar'];
$contrasenha= $_POST['contrasenhaIniciar'];
$errores= array();

$canal = pg_query("SELECT * FROM usuario WHERE correo='$correo' AND contrasenha='$contrasenha'");

if(empty($correo)){
	array_push($errores,"Correo no puede estar vacio");
}

if(empty($contrasenha)){
	array_push($errores,"Contraseña no puede estar vacio");
}

if (count($errores) == 0) {
  	if (pg_num_rows($canal) == 1) {
  	  $usuario = pg_fetch_array($canal);
  	  $_SESSION['correo'] = $usuario['correo'];
  	  echo 'Inicio de sesion satisfactorio';
  	}else {
		echo 'Usuario y/o contraseña incorrectos';
  		array_push($errors, "Error, correo o contraseña erroneos");
  	}
  }

pg_close($canal);

?>

<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stellar - Inicio Sesion</title>
    <link rel="shortcut icon" href="pics/stellar-rocket-300.png">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">

  </head>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Stellar</a>
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
