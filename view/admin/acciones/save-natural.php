<?php

include ("../db.php");

if (isset($_POST['save-natural'])){

 $nombre = $_POST['nombre'];
 $apellido = $_POST['apellido'];
 $dni = $_POST['dni'];
 $correo = $_POST['correo'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];


if(empty($nombre) || empty($apellido) || empty($dni) || empty($correo) || empty($direccion) || empty($telefono) ){
	  

    	echo 'Debe completar los campos';

    		

		}else{

			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
 			 echo "Formato de correo invalido"; 
			}else{

 $query = "INSERT INTO persona_natural(nombre, apellido, dni, correo, direccion, telefono) VALUES('$nombre','$apellido','$dni', '$correo', '$direccion', '$telefono'  )";

 	$result = mysqli_query($conn, $query);
 	if(!$result){

 			die("Conneción fallida");

 	}

 	$_SESSION['message'] = 'Persona Natural guardado correctamente';
 	$_SESSION['message_type'] = 'success';

 	header("Location: ../registro-natural.php");
}

}

}

?>