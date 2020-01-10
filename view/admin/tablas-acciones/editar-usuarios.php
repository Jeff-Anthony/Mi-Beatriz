<?php

include("../db.php");

	if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM usuarios WHERE id = $id";
			$result = mysqli_query($conn ,$query);
			if(mysqli_num_rows($result) == 1){

				$row = mysqli_fetch_array($result);
				$nombre = $row['nombre'];
				$apellido = $row['apellido'];
        $usuario = $row['usuario'];
        $pais = $row['pais'];
        $direccion = $row['direccion'];
        $provincia = $row['provincia'];
        $telefono = $row['telefono'];
				$nacimiento = $row['nacimiento'];
				$email = $row['email'];
	
			}
	}


	if(isset($_POST['actualizar'])){

		$id = $_GET['id'];

		    $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $pais = $_POST['pais'];
        $direccion = $_POST['direccion'];
        $provincia = $_POST['provincia'];
        $telefono = $_POST['telefono'];
        $nacimiento = $_POST['nacimiento'];
        $email = $_POST['email'];

	 if(empty($nombre) || empty($apellido) || empty($usuario) || empty($pais) || empty($provincia) || empty($telefono) || empty($nacimiento)|| empty($email) ){
	  

    	echo 'Debe completar los campos';

    		

		}else{

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 			 echo "Formato de correo invalido"; 
			}else{



			$query = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', usuario = '$usuario', pais = '$pais', direccion = '$direccion',provincia = '$provincia', telefono = '$telefono',nacimiento = '$nacimiento', email = '$email' WHERE id = $id ";
			mysqli_query($conn, $query);
			header("Location: ../../../registro.php");	
		}
		}

	}


?>

<!DOCTYPE html>
<html>
<head>



	<title>Editar - Usuario</title>

	

	<!--- BOOSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../../../css/sweetalert.css">
    
    <link rel="stylesheet" href="../../../css/style.css">

</head>
<body>
<ul class="pager">
    <li class="previous"><a href="../../../registro.php"><span aria-hidden="true">&larr;</span> Regresar a Registro</a></li>
</ul>  

<form  action="editar-usuarios.php?id=<?php echo $_GET['id']; ?>" method="POST">
         
          
   		<div class="container">
     	 <div class="row">
      	  <div class="col-xs-12 col-md-4 col-md-offset-4">
          
            <fieldset>

              <legend class="center">Editar - Usuario</legend>


           

         
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"> Nombre    </i></div>
                <input type="text" class="form-control" name="nombre"  value="<?php echo $nombre; ?>" placeholder="Editar Nombre">
              </div>

           
              <div class="spacing-2"></div>

         
  
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Apellido   </i></div>
                <input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>" placeholder="Editar Apellido">
              </div>

              <div class="spacing-2"></div>

              
               <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Usuario    </i></div>
                <input type="text" class="form-control" name="usuario" value="<?php echo $usuario; ?>" placeholder="Editar Usuario" readonly="readonly">
              </div>

       
              <div class="spacing-2"></div>


               <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> País          </i></div>
                <input type="text" class="form-control" name="pais" value="<?php echo $pais; ?>" placeholder="Editar País">
              </div>

              <div class="spacing-2"></div>

               <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Dirección</i></div>
                <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="Editar Direccion">
              </div>

               <div class="spacing-2"></div>

               <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Provincia</i></div>
                <input type="text" class="form-control" name="provincia" value="<?php echo $provincia; ?>" placeholder="Editar Provincia">
              </div>

               <div class="spacing-2"></div>

              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Teléfono  </i></div>
                <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Editar Telefono">
              </div>

               <div class="spacing-2"></div>

              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Fecha      </i></div>
                <input type="date" class="form-control" name="nacimiento" value="<?php echo $nacimiento; ?>" placeholder="Editar Fecha de Nacimiento">
              </div>

              <div class="spacing-2"></div>

              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"> Correo     </i></div>
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Editar Correo">
              </div>

                <div class="spacing-2"></div>
             
              
              <div class="row" id="load2" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="../../../img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>

          
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-success btn-block" name="actualizar"  value="Actualizar">
                  <a class="btn btn-danger btn-block" href="../../../registro.php">Cancelar</a>                    
                </div>
              </div>

              

            </fieldset>
          </form>


<?php include("../componentes/final.php") ?>