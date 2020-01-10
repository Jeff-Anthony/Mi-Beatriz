<?php

include("../db.php");

	if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM persona_natural WHERE id = $id";
			$result = mysqli_query($conn ,$query);
			if(mysqli_num_rows($result) == 1){

				$row = mysqli_fetch_array($result);
				$nombre = $row['nombre'];
				$apellido = $row['apellido'];
				$dni = $row['dni'];
				$correo = $row['correo'];
				$direccion =$row['direccion'];
				$telefono = $row['telefono'];
			}
	}


	if(isset($_POST['actualizar'])){

		$id = $_GET['id'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$dni = $_POST['dni'];
		$correo = $_POST['correo'];
		$direccion =$_POST['direccion'];
		$telefono = $_POST['telefono'];

	 if(empty($nombre) || empty($apellido) || empty($dni) || empty($correo) || empty($direccion) || empty($telefono) ){
	  

    	echo 'Debe completar los campos';

    		

		}else{

			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
 			 echo "Formato de correo invalido"; 
			}else{



			$query = "UPDATE persona_natural SET nombre = '$nombre', apellido = '$apellido', 
			dni = '$dni', correo = '$correo', direccion = '$direccion', telefono = '$telefono' WHERE id = $id ";
			mysqli_query($conn, $query);
			header("Location: ../registro-clientes.php");	
		}
		}

	}


?>

<!DOCTYPE html>
<html>
<head>



	<title>Editar - Persona Natural</title>

	

	<!--- BOOSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../../../css/sweetalert.css">
    
    <link rel="stylesheet" href="../../../css/style.css">

</head>
<body>
<ul class="pager">
    <li class="previous"><a href="../registro-cliente.php"><span aria-hidden="true">&larr;</span> Regresar a Registro</a></li>
</ul> 


<form  action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
         
          
   		<div class="container">
     	 <div class="row">
      	  <div class="col-xs-12 col-md-4 col-md-offset-4">
          <div class="spacing-1"></div>
            <fieldset>

              <legend class="center">Editar - Persona Natural </legend>


           

         
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre"  value="<?php echo $nombre; ?>" placeholder="Editar Nombre">
              </div>

           
              <div class="spacing-2"></div>

         
  
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>" placeholder="Editar Apellido">
              </div>

              <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input class="form-control" name="dni" value="<?php echo $dni; ?>" placeholder="Editar DNI" name="somename" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "8"/>            
              </div>

       
              <div class="spacing-2"></div>

             
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>" placeholder="Editar Correo">
              </div>

                <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="Editar Direccion">
              </div>
  
                <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Editar Telefono">
              </div>
    
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
                  <input type="submit" class="btn btn-success btn-block" name="actualizar" id="registro_natural" value="Actualizar">
                  <a class="btn btn-danger btn-block" href="../registro-clientes.php">Cancelar</a>                    
                </div>
              </div>

              

            </fieldset>
          </form>



<?php include("../componentes/final.php") ?>