<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


     <title>Recursos Humanos</title>

    
      <link rel="stylesheet" href="../../css/style.css">

      <link rel="stylesheet" href="../../css/buttons.css" >

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>

            <div class="center">
              <h2> Recursos Humanos Usuario - <?php echo ucfirst($_SESSION['nombre']); ?> </h2>
            </div>

            <form class="module">
       
                <div class="center">
                  <legend class="center" >Modulo - Recursos Humanos</legend>
                      
                    <button  type="button" class="btn btn-info" name="button" id="registro" onclick="location='../../registro.php'" >Registro de trabajadores</button>
                </div>
            </form>
       
          <div class="sesion">

            <a href="../../controller/cerrarSesion.php">
               <button type="button" class="btn btn-secondary" name="button">Cerrar sesion</button>
            </a>

          </div>  
  </body>
</html>
