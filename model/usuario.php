<?php


  require_once('conexion.php');


  class Usuario extends Conexion
  {

    public function login($user, $clave)
    {
    
      parent::conectar();
   
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);

    
      $consulta = 'select id, nombre, apellido, cargo from usuarios where usuario="'.$user.'" and clave= MD5("'.$clave.'")';
      

      $verificar_usuario = parent::verificarRegistros($consulta);

     
      if($verificar_usuario > 0){


        $user = parent::consultaArreglo($consulta);


        session_start();

      
        $_SESSION['id']     = $user['id'];
        $_SESSION['nombre'] = $user['nombre'];
        $_SESSION['apellido'] = $user['apellido'];
        $_SESSION['cargo']  = $user['cargo'];

    
        if($_SESSION['cargo'] == 1){
          echo 'view/admin/index.php';
        }else if($_SESSION['cargo'] == 2){
          echo 'view/user/index.php';
        }


     

      }else{
     
        echo 'error_3';
      }

      parent::cerrar();
    }





    public function registroUsuario($name, $lastname, $user, $email, $country, $address, $province, $phone, $age, $clave)
    {
      parent::conectar();

      $name  = parent::filtrar($name);
      $lastname  = parent::filtrar($lastname);
      $user  = parent::filtrar($user);
      $email = parent::filtrar($email);
      $country = parent::filtrar($country);
      $address = parent::filtrar($address);
      $province = parent::filtrar($province);
      $phone = parent::filtrar($phone);
      $age = parent::filtrar($age); 
      $clave = parent::filtrar($clave);


    
      $verificarCorreo = parent::verificarRegistros('select id from usuarios where email="'.$email.'" ');

      $verificarUsuario = parent::verificarRegistros('select id from usuarios where usuario="'.$user.'" ');

      if($verificarCorreo > 0){
        echo 'error_3';
      }else if($verificarUsuario > 0){

        echo 'error_5';

      }else{

        parent::query('insert into usuarios(nombre, apellido, usuario, email,  pais, direccion, provincia, telefono, nacimiento, clave, cargo) values("'.$name.'", "'.$lastname.'", "'.$user.'", "'.$email.'","'.$country.'","'.$address.'","'.$province.'","'.$phone.'","'.$age.'", MD5("'.$clave.'"), 2)');

      }
      

      parent::cerrar();
    }






  }



?>
