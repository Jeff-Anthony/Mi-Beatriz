<?php

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $user = $_POST['user'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $address = $_POST['address'];
  $province = $_POST['province'];
  $phone = $_POST['phone'];
  $age = $_POST['age']; 
  $clave = $_POST['clave'];
  $clave2 = $_POST['clave2'];

  if(empty($name) || empty($lastname) || empty($user) || empty($email) || empty($country)|| empty($address)|| empty($province) ||empty($phone)|| empty($age)|| empty($clave) || empty($clave2))
  {
    echo 'error_1'; 

  }else{

    if($clave == $clave2){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

       
        require_once('../model/usuario.php');

        $usuario = new Usuario();

     
        $usuario -> registroUsuario($name, $lastname, $user, $email, $country, $address, $province, $phone, $age, $clave);


      }else{
        echo 'error_4';
      }


    }else{
      echo 'error_2';
    }

  }




?>
