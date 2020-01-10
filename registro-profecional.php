<?php include("view/admin/db.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro del Personal</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="css/font-awesome.min.css">
  
    <link rel="stylesheet" href="css/sweetalert.css">

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

    <link rel="stylesheet" href="css/menu2.css">

    <script src="js/jquery-3.4.1.min.js"></script> 

  </head>
  <body>





<nav>
  <ul class="pager">
    <li class="previous"><a href="view/recursos/index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo</a></li>
  </ul>  

     <div class="row" >
      <ul class="col-xs-offset-4" >

        <li><a href="registro.php">| General  </a></li>
        <li><a href="registro-profecional.php">| Profecional  </a></li>
        <li><a href="registro-contrato.php">| Contrato  |</a></li>

      </ul>
      </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      
        
         <div class="container" >
          <form id="formulario_registro">
           
            <fieldset>

              <legend class="center"><i class="fa fa-user"> Registro de Usuarios (Profecional)</i></legend>
 
              <div class="form-group">
               <label class="control-label col-sm-2" for="uni">Universidad/Instituto:  </label>
                <div class="col-sm-3">                
                  <input type="text" class="form-control" name="uni" placeholder="Universidad/Instituto">
                </div>   

                <label class="control-label col-sm-2" for="tipo">Fecha de Egreso: </label>
              
                <div class="col-sm-2">
                  <input input type="date"  value="1980-01-01" class="form-control" name="egreso" >
                </div>

                  </div>

                  <br>
                  <br>

                <div class="form-group">

              <label class="control-label col-sm-2" for="tipo">Grado/Título: </label>
          
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="grade" placeholder="Grado/Título">
                </div>
             

             <label class="control-label col-sm-2" for="tipo">Fecha de Titulación: </label>
              
                <div class="col-sm-2">
                  <input type="date"  value="1980-01-01" class="form-control" name="fech" >
                </div>
             
  
            </div>

            <br>
            <br>
           
          </fieldset>
          </form> 

        <?php
                $query = "SELECT id FROM usuarios";
                  $result_usuarios = mysqli_query($conn, $query);

                  if($result_usuarios->num_rows > 0){


                while($row = mysqli_fetch_array($result_usuarios)) {
                  $id = $row['id'];
                 }
               }
                ?>         
        
          
      <div class="form-group">
        <form name="add_name" id="add_name">
          <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field">

              
              <tr>
                    <td>
               
                       <label hidden for="tipo"> Codigo: </label>
                      <div> 
                    <input  hidden  type="text" class="form-control" name="user[]" placeholder="Usuario" value="MBR0<?php echo $id + 1?>">
                      </div>

                    <label class="control-label col-sm-1" >Maestría: </label>
                      
                      <div class="col-sm-3">
                          <input type="text" class="form-control" name="maestria[]" placeholder="Maestría">
                      </div>

                    <label class="control-label col-sm-1" >Año: </label>
                      
                      <div class="col-sm-3">
                          <input type="date"  value="1980-01-01" class="form-control" name="maestria_año[]">
                      </div>

                    <label class="control-label col-sm-1" >Grado: </label>
                      
                      <div class="col-sm-3">
                          <input type="text" class="form-control" name="maestria_grado[]" placeholder="Grado de Maestría">
                      </div>
                    </td>
                    <td>    
                      
                       <button type='button' name="form"  id="form" class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></button>
                                                                     
                     </td>
            </tr>
          </table>
         
          <br>
          <br>
              
              <div class="col-xs-3 col-xs-offset-4">                              
                <input type="button" class="btn btn-success btn-block" name="submit" id="submit" class="btn btn-info" value="Registrar"/>
                <a class="btn btn-danger btn-block" href="index.php">Cancelar</a>
               </div>         
           </div>    
       </form> 
      </div> 
              <a href="index.php"></a>
            </fieldset>
          
        </div>
      </div> 



      </div>
    </div>
</nav>

  </body>

<script>
  
 

$(document).ready(function(){
  var i=1;
  $('#form').click(function(){
    i++;
    $('#dynamic_field').append(' <tr id="row'+i+'"><td><label hidden for="tipo"> Codigo: </label> <div> <input  hidden  type="text" class="form-control" name="user[]" placeholder="Usuario" value="MBR0<?php echo $id + 1?>"></div> <label class="control-label col-sm-1" >Maestría: </label><div class="col-sm-3"> <input type="text" class="form-control" name="maestria[]" placeholder="Maestría"> </div> <label class="control-label col-sm-1" >Año: </label><div class="col-sm-3"> <input type="date"  value="1980-01-01" class="form-control" name="maestria_año[]"> </div> <label class="control-label col-sm-1" >Grado: </label> <div class="col-sm-3">  <input type="text" class="form-control" name="maestria_grado[]" placeholder="Grado de Maestría"> </div>   </td>  <td>    <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>  </td> </tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  



  $('#submit').click(function(){    
    $.ajax({
      url:"controller/maestrias.php",
      method:"POST",
      data:$('#add_name').serialize(),
      success:function(data)
      {
        alert(data);
        $('#add_name')[0].reset();
      }
    });
  });
  
});

</script>


    <script src="js/jquery.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/sweetalert.min.js"></script>
   
    <script src="js/operaciones.js"></script>

    <script src="js/idioma.js"></script>
     <script src="js/jquery.dataTables.min.js"></script>    

  </body>
</html>
