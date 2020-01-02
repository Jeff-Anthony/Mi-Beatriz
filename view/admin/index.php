<?php

  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
  
    header('location: ../../index.php');
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>

    
      <link rel="stylesheet" href="../../css/style.css">

      <link rel="stylesheet" href="../../css/buttons.css" >

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
    
    <div class="center">
     <h2> Bienvenido Administrador <?php echo ucfirst($_SESSION['nombre']); ?></h2>
    </div>
  
              <form class="module">
       
                <div class="center">
                  <legend class="center" >Modulo - Administrador</legend>
                
                      <div class="spacing-2"></div>
                    
                    <button type="button" class="btn btn-info" name="button" id="login" onclick="location='registro-clientes.php'">Registro de Clientes</button>
                              
                    <button type="button" class="btn btn-info" name="button" id="login" onclick="location='registro-equipos.php'">Registro de equipos</button>
                 </div>
              </form>
       
              <div class="sesion">

                    <a href="../../controller/cerrarSesion.php" >
                       <button type="button" class="btn btn-secondary" name="button">Cerrar sesion</button>
                    </a>
              </div>
  </body>
</html>
