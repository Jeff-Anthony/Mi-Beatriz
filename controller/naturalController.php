<?php

  $nombre   = $_POST['nombre'];
  $apellido  = $_POST['apellido'];
  $dni  = $_POST['dni'];
  $correo = $_POST['correo '];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];

  if(empty($nombre) || empty($apellido) || empty($dni)|| empty($correo)|| empty($direccion)|| empty($telefono))
  {

    echo 'error_1';

  }else{

   
      
        require_once('../model/usuario.php');

     
        $usuario = new Usuario();

     
        $usuario -> registroNatural($nombre, $apellido, $dni, $correo, $direccion, $telefono);


    }

  }




?>
