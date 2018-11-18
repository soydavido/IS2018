<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stellar - Inicio de Sesion</title>
    <link rel="shortcut icon" href="pics/stellar-rocket-300.png">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Stellar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contactanos</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="users.php">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Usuarios</h1>

      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class="card h-100">
            <h4 class="card-header" width=100 height=200 >Inicio de sesion</h4> </br>
              <form>
               <div>
                 <label for="nombreDeUsuario">Correo</label>
                 <input type="text" name="correoIniciar" id="correoIniciar">
               </div>
               <div>
                 <label for="contrasenha">Contraseña</label>
                 <input type="password" name="contrasenhaIniciar" id="contrasenhaIniciar">
               </div>
               <div class="col-md-4">
                  <a class="btn btn-lg btn-secondary btn-block boton" href="#">Iniciar</a>
               </div>
              </form>
            </div>
           </div>
        <div class="col-lg-5 mb-5">
          <div class="card h-100">
            <h4 class="card-header">Registro</h4>
            <form class="card-body" action="funciones/registroUsuario.php" method="POST">
                <div>
                  <label for="nombreRegistro" >Nombre </label>
                  <input type="text"  name="nombreRegistro" id="nombreRegistro">
                </div>
                <div>
                  <label for="apellidoRegistro" >Apellido</label>
                  <input type="text"  name="apellidoRegistro" id="apellidoRegistro">
                </div>
                <div>
                  <label for="correoRegistro">Correo</label>
                  <input type="text"  name="correoRegistro" id="correoRegistro">
                </div>
                <div>
                  <label for="contrasenhaRegistro" pattern=".{8,15}" required" >Contraseña</label>
                  <input type="password"  name="contrasenhaRegistro" id="contrasenhaRegistro">
                </div>
                <div>
                  <label for="contrasenha2">Validar contraseña</label>
                  <input type="password" name="contrasenhaRegistro2" id="contrasenhaRegistro2">
                </div>
                <div>
                  <label for="fechaNac">Fecha de Nacimiento</label>F
                  <input type="date" name="fechaNacRegistro" id="fechaNacRegistro">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn">Registrar</button>
                </div>
           </form>
          </div>
        </div>
      </div>

      <!-- /.row -->

      <hr>


      <div><br></div>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>En caso de duda, contactanos.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="about.php">Contactanos</a>
        </div>
      </div>

    </div>
    <!-- /.container -->
    <div><br></div>
    
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
