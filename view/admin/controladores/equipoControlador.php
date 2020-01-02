<?php
include("db.php");



if(isset($_POST['save-equipos'])){
  $familia = $_POST['familia'];
  $tipo = $_POST['tipo']; 
  $marca = $_POST['marca'];
  $modelo = $_POST['modelo'];
  $partnumber = $_POST['partnumber'];
 

  
    if(empty($familia)||empty($tipo)||empty($marca)||empty($modelo)||empty($partnumber))
      {
        echo 'Complete todos los campos';
      }else{
        $query = "INSERT INTO equipos(familia, tipo, marca, modelo, partnumber) VALUES('$familia','$tipo','$marca','$modelo','$partnumber' )";

        $result = mysqli_query($conn, $query);
          if(!$result){

         die("Conneción fallida");
        }    
        header("Location:registro-equipos.php");
      }
  }




 ?>