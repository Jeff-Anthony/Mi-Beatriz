<?php

include ("db.php");

if (isset($_POST['save-juridico'])){

 $razon = $_POST['razon'];
 $ruc = $_POST['ruc'];
 $direccion = $_POST['direccion'];
 $telefono = $_POST['telefono'];
 $contacto = $_POST['contacto'];
 $correo = $_POST['correo'];

$script = " <script>document.getElementById('formulario_juridico').style.display='block'</script>";


if(empty($razon) || empty($ruc) || empty($direccion) || empty($telefono) || empty($contacto) || empty($correo) ){
    

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

  header("Location:registro-clientes.php");

  echo $script;

         }
        }
   
      }

?>