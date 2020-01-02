
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login en PHP</title>

   
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/font-awesome.min.css">
   
    <link rel="stylesheet" href="css/sweetalert.css">
   
    <link rel="stylesheet" href="css/style.css">

     <link rel="stylesheet" href="css/menu.css">
  </head>
  <body>


<nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"  >
        <img class="logo"style="width: 120px; height: 65px;" src="img/logo.png">
      </label>
      <ul>
        <li><a class="active" href="index.php">Mantenimiento</a></li>
        <li><a href="recursos_humanos.php">Recursos Humanos</a></li>
  
      </ul>

  
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
        
          <div class="spacing-1"></div>

          <form>  
          <fieldset>

            <legend class="center">Recursos Humanos</legend>

            <label class="sr-only" for="user">Usuario</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-user"></i></div>
              <input type="text" class="form-control" id="user" placeholder="Ingresa tu usuario" value="jeff" >
            </div>
     
            <div class="spacing-2"></div>

            <label class="sr-only" for="clave">Contraseña</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-lock"></i></div>
              <input type="password" autocomplete="off" class="form-control" id="clave" placeholder="Ingresa tu usuario" value="123">
            </div>

            <div class="row" id="load" hidden="hidden">
              <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                <img src="img/load.gif" width="100%" alt="">
              </div>
              <div class="col-xs-12 center text-accent">
                <span>Validando información...</span>
              </div>
            </div>
        
            <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
                <div class="spacing-2"></div>
                <button type="button" class="btn btn-primary btn-block" name="button" id="login_recursos">Iniciar sesion</button>
              </div>
            </div>

           

          </fieldset>
          </form>
        </div>
      </div>
    </div>

 </nav>
    <script src="js/jquery.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/sweetalert.min.js"></script>
   
    <script src="js/operaciones.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </body>
</html>
