<?php

include ("../db.php");

if (isset($_POST['save-juridico'])){

 $razon = $_POST['razon'];
 $ruc = $_POST['ruc'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 $contacto = $_POST['contacto'];
 $correo = $_POST['correo'];


if(empty($nombre) || empty($apellido) || empty($dni) || empty($correo) || empty($direccion) || empty($telefono) ){
    

      echo 'Debe completar los campos';

        

    }else{

      if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
       echo "Formato de correo invalido"; 
      }else{



 $query = "INSERT INTO persona_juridica(razon, ruc, direccion, telefono, contacto, correo) VALUES('$razon','$ruc', '$direccion', '$telefono','$contacto', '$correo'  )";

 	$result = mysqli_query($conn, $query);
 	if(!$result){

 			die("Conneción fallida");

 	}

 	$_SESSION['message'] = 'Persona Juridica guardado correctamente';
 	$_SESSION['message_type'] = 'success';

 	header("Location: ../registro-juridico.php");
	       }
        }
	 

?>