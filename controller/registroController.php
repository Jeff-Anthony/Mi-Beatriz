<?php

  $name   = $_POST['name'];
  $lastname   = $_POST['lastname'];
  $user   = $_POST['user'];
  $email  = $_POST['email'];
  $clave  = $_POST['clave'];
  $clave2 = $_POST['clave2'];

  if(empty($name) || empty($lastname) || empty($user) || empty($email) ||empty($clave) || empty($clave2))
  {

    echo 'error_1'; 

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

       
        require_once('../model/usuario.php');

        $usuario = new Usuario();

     
        $usuario -> registroUsuario($name, $lastname, $user, $email, $clave);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
