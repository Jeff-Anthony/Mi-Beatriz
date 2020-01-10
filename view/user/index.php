<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


     <title>Trabajadores</title>

     <style type="text/css">

form{
  
  width: 450px;
  height: 250px;
 

}


#trabajador{

 margin-top: 180px;

}

</style>


    
      <link rel="stylesheet" href="../../css/style.css">

      <link rel="stylesheet" href="../../css/buttons.css" >

      <link rel="stylesheet" href="../../css/menu.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
    <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"  >
        <img class="logo"style="width: 120px; height: 65px;" src="../../img/logo.png">
      </label>

            <div class="center">
              <h2> Trabajador - <?php echo ucfirst($_SESSION['nombre']); ?> </h2>
            </div>
 <div class="spacing-1"></div>   
              <div class="center">
               <h2> .</h2>

        

              </div>
                <div class="container-fluid">

                  <div class="row">
                    
                    <div class="col-6" >
                     
                      <form  class="module" >

                       
                        
                        <div class="center">

                          <legend class="center" >Modulo - Administrador</legend>
                          
                         
                            
                              <button disabled type="button" class="btn btn-info" name="button" id="login_clientes" onclick="location='registro-clientes.php'">Registro de Clientes</button>

                                      
                               <div class="spacing-2"></div>

                              <button disabled type="button" class="btn btn-info" name="button" id="login_equipos" onclick="location='registro-equipos.php'">Registro de equipos</button>

                           </div>
                        </form>
            

                      
                      </div>

                         <div class="col-6" >
                            <form class="module">
                         
                                  <div class="center">
                                    <legend class="center" >Modulo - Recursos Humanos</legend>
                                        
                                      <button disabled type="button" class="btn btn-info" name="button" id="registro" onclick="location='../../registro.php'" >Alta de trabajadores</button>

                                  </div>
                              </form>
                                   
                        </div> 
                    </div>
                </div>




              <div class="col-12" >
                <div class="spacing-1"></div>
                <div class="row">

                     <form  id="trabajador" class="module">
                             
                        <div class="center">

                          <legend class="center" >Modulo - Trabajador</legend>
                          
                         
                            
                              <button type="button" class="btn btn-info" name="button" id="login_clientes" onclick="location='producto.php'"> Registro de Producto en Almacén</button>

                                      
                              <div class="spacing-2"></div> 

                              <button type="button" class="btn btn-info" name="button" id="login_equipos" onclick="location='ventas.php'">Retiro o Salida</button>

                              <div class="spacing-2"></div> 
                              
                              
                           </div>
                        </form>
                </div>

              </div>

                <div class="sesion">

                  <a href="../../controller/cerrarSesion.php" >
                     <button type="button" class="btn btn-secondary" name="button">Cerrar sesion</button>
                  </a>
                </div>

  </body>
</html>
