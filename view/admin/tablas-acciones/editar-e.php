<?php

include("../db.php");

	if(isset($_GET['id'])){
			$id = $_GET['id'];
			$query = "SELECT * FROM equipos WHERE id = $id";
			$result = mysqli_query($conn ,$query);
			if(mysqli_num_rows($result) == 1){

				$row = mysqli_fetch_array($result);
				$familia = $row['familia'];
				$tipo = $row['tipo'];      
				$marca =$row['marca'];
				$modelo = $row['modelo'];
        $partnumber = $row['partnumber'];
     
			}
	}


	if(isset($_POST['actualizar-e'])){

		$id = $_GET['id'];
		$familia = $_POST['familia'];
		$tipo = $_POST['tipo'];
		$marca =$_POST['marca'];
		$modelo = $_POST['modelo'];
    $partnumber = $_POST['partnumber'];
  
	 if(empty($familia) || empty($tipo) || empty($marca) || empty($modelo) || empty($partnumber)){
	  

    	echo 'Debe completar todos los campos';

    		

		}else{


			$query = "UPDATE equipos SET familia = '$familia', tipo = '$tipo', 
			marca = '$marca', modelo = '$modelo', partnumber = '$partnumber' WHERE id = $id ";
			mysqli_query($conn, $query);
			header("Location: ../registro-equipos.php");	
		
		}

	}


?>

<!DOCTYPE html>
<html>
<head>



	<title>Editar - Equipos</title>

	

	<!--- BOOSTRAP 4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../css/font-awesome.min.css">
   
    <link rel="stylesheet" href="../../../css/sweetalert.css">
    
    <link rel="stylesheet" href="../../../css/style.css">

</head>
<body>
<a href="../registro-equipos.php">Regresar</a>

<form  action="editar-e.php?id=<?php echo $_GET['id']; ?>" method="POST">
         
          
   		<div class="container">
     	 <div class="row">
      	  <div class="col-xs-12 col-md-4 col-md-offset-4">   
          <div class="spacing-1"></div>
            <fieldset>

              <legend class="center">Editar - Equipos </legend>

              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="familia"  value="<?php echo $familia; ?>" placeholder="Editar Familia">
              </div>

           
              <div class="spacing-2"></div>

         
  
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="tipo" value="<?php echo $tipo; ?>" placeholder="Editar el Tipo">
              </div>

        
                <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="marca" value="<?php echo $marca; ?>" placeholder="Editar Marca">
              </div>
  
                <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="modelo" value="<?php echo $modelo; ?>" placeholder="Editar Modelo">
              </div>


             <div class="spacing-2"></div>

              
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="partnumber" value="<?php echo $partnumber; ?>" placeholder="Editar Partnumber">
              </div>

    
              <div class="row" id="load2" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="../../../../img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>

          
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-success btn-block" name="actualizar-e" id="registro_equipos" value="Actualizar">
                  <a class="btn btn-danger btn-block" href="../registro-equipos.php">Cancelar</a>                                
                </div>
              </div>

              

            </fieldset>
          </form>



<?php include("../componentes/final.php") ?>