$('#login').click(function(){


  var user  = $('#user').val();
  var clave = $('#clave').val();


  $.ajax({
    method: 'POST',
   
    url: 'controller/loginController.php',
   
    data: {user_php: user, clave_php: clave},
   
    beforeSend: function(){
     
      $('#load').show();
    },
   
    success: function(res){
    
      $('#load').hide();

      
      if(res == 'error_1'){
      
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
     
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else{
      
        window.location.href= res
      }

    }
  });

});


$('#login_recursos').click(function(){


  var user  = $('#user').val();
  var clave = $('#clave').val();


  $.ajax({
    method: 'POST',
   
    url: 'controller/loginRecursosController.php',
   
    data: {user_php: user, clave_php: clave},
   
    beforeSend: function(){
     
      $('#load').show();
    },
   
    success: function(res){
    
      $('#load').hide();

      
      if(res == 'error_1'){
      
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
     
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else{
      
        window.location.href= res
      }

    }
  });

});




$('#registro').click(function(){

  var form = $('#formulario_registro').serialize();

  $.ajax({
    method: 'POST',
    url: 'controller/registroController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){
        swal('Error', 'Campos obligatorios, por favor llena el email y las claves', 'warning');
      }else if(res == 'error_2'){
        swal('Error', 'Las claves deben ser iguales, por favor intentalo de nuevo', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'El correo que ingresaste ya se encuentra registrado', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'Por favor ingresa un correo valido', 'warning');
      }else if(res == 'error_5'){
        swal('Error', 'El usuarios ya se encuentra Registrado!', 'error');
      }else{
        window.location.href = res ;
      }


    }
  });

});


$('#registro-equipos').click(function(){

  var form = $('#formulario_equipos').serialize();

  $.ajax({
    method: 'POST',
    url: 'controller/equiposController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){
        swal('Error', 'Campos obligatorios, por favor llena el email y las claves', 'warning');
      }else if(res == 'error_2'){
        swal('Error', 'Las claves deben ser iguales, por favor intentalo de nuevo', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'El Part-Number que ingresaste ya se encuentra registrado', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'Por favor ingresa un correo valido', 'warning');
      }else{
        window.location.href = res ;
      }


    }
  });

});


