
<?php include ("controladores/juridicoControlador.php"); ?>

<?php include("db.php"); ?>

<?php include("componentes/encabezado.php"); ?>

<?php include ("controladores/naturalControlador.php"); ?>
  
  <ul class="pager">
    <li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo </a></li>
  </ul>  
 <!-- Persona Juridica  -->
  <div class="center"> 
            <a href="">Registro con: </a>  
            <input class="btn btn-primary"   type="button" value="RUC" onclick="RUC();">
            <input class="btn btn-primary"   type="button" value="DNI" onclick="DNI();">
          </div>
<div  id="formulario_juridico" > 
    <div class="container">
      <div class="row">

        

        <div class="col-3">
          
        <form action="registro-clientes.php" method="POST" class="formulario_juridico">
            <div class="spacing-2"></div>
            <fieldset>

              <legend class="center">Registro Persona Juridica</legend>

              <label class="sr-only" for="user">Razon Social</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="razon" placeholder="Razon Social">
              </div>

              <div class="spacing-2"></div>

              <label class="sr-only" for="user">RUC</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number"  class="form-control" name="ruc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "11" placeholder="RUC" >
              </div>

              <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Direccion</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
              </div>

              
              <div class="spacing-2"></div>

             <label class="sr-only" for="user">Telefono</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" class="form-control" name="telefono" placeholder="Telefono">
              </div>

                <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Contacto</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="contacto" placeholder="Contacto">
              </div>
  
                <div class="spacing-2"></div>

               <label class="sr-only" for="user">Correo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="correo" placeholder="Correo">
              </div>
    
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                   <input type="submit" class="btn btn-primary btn-block" name="save-juridico" id="registro_juridico" value="Registrar">
                </div>
              </div>

            </fieldset>
        </form>  
 
    
      </div>



    <div class="col-9">
       
        <div class="col-md-12" style="text-align: center; margin: 0 auto;">
        <h2>Lista de Personas - Juridicas</h2>
          <table  id="datos-tabla" class="table table-bordered">
            
              <thead>
                
                <tr>
                  <th>Razon</th>
                  <th>RUC</th>              
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Contacto</th> 
                  <th>Correo</th>
                  <th>Acciones</th>
                </tr>

              </thead>
              <tbody>
                
                <?php 
                
                  $query = "SELECT * FROM persona_juridica";
                  $result_juridica = mysqli_query($conn, $query);


                  if($result_juridica->num_rows > 0){


                while($row = mysqli_fetch_array($result_juridica)) { ?>
                  
                <tr>
                  <td><?php echo $row['razon'] ?></td>
                  <td><?php echo $row['ruc'] ?></td>
                  <td><?php echo $row['direccion'] ?></td>
                  <td><?php echo $row['telefono'] ?></td>
                  <td><?php echo $row['contacto'] ?></td>
                  <td><?php echo $row['correo'] ?></td>

                  <td>
                    <a style='width:38px; height:30px' class="btn btn-primary btn-warning" href="tablas-acciones/editar-j.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil" ><h6></h6></i></a>
                    <a style='width:38px; height:30px'class="btn btn-primary btn-danger" href="tablas-acciones/eliminar-j.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"><h6></h6></i></a>
                  </td>

               </tr> 

              <?php } ?>

             </tbody>
            </table>

           <?php }else{
             echo "No hay registros :(";
           } ?>
         </div>
       </div>
      </div>

    </div>
  </div>

    <!-- Persona Natural  -->

<div id="formulario_natural">

 <div class="container">
   <div class="row">
    <div class="col-3" >
 
      <form class="formulario_natural" action="registro-clientes.php" method="POST" >
           <div class="spacing-2"></div>
            <fieldset>

              <legend class="center">Registro Persona Natural</legend>

               <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>

           
              <div class="spacing-2"></div>

         
              <label class="sr-only" for="user">Apellido</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="apellido" placeholder="Apellido">
              </div>

              <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Dni</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" maxlength="8" class="form-control" name="dni"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "8" placeholder="DNI" >
              </div>

       
              <div class="spacing-2"></div>

             <label class="sr-only" for="user">Correo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="correo" placeholder="Correo">
              </div>

                <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Direccion</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="direccion" placeholder="Direccion">
              </div>
  
                <div class="spacing-2"></div>

               <label class="sr-only" for="user">Telefono</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="number" class="form-control" name="telefono" placeholder="Telefono">
              </div>
    
              <div class="row" id="load2" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>

          
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-primary btn-block" name="save-natural" id="registro_natural" value="Registrar">
                                    
                </div>
              </div>

                

            </fieldset>


          </form>

      

        </div>



        <div class="col-9">

        <div class="col-md-12" style="text-align: center; margin: 0 auto;">
          <h2>Lista de Personas - Naturales</h2>
              <table id="datostabla" class="table table-bordered">
                
                <thead>
                  
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th> 
                  </tr>

                </thead>
                <tbody>
                  
                  <?php 
                    $query = "SELECT * FROM persona_natural";
                    $result_natural = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_natural)) { ?>
                  <tr>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['apellido'] ?></td>
                  <td><?php echo $row['dni'] ?></td>
                  <td><?php echo $row['correo'] ?></td>
                  <td><?php echo $row['direccion'] ?></td>
                  <td><?php echo $row['telefono'] ?></td>
                  <td>
                    <a style='width:38px; height:30px' class="btn btn-primary btn-warning "  href="tablas-acciones/editar.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil" ><h6></h6></i></a>
                    <a style='width:38px; height:30px' class="btn btn-primary btn-danger" href="tablas-acciones/eliminar.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"><h6></h6></i></a>
                  </td>

                </tr> 

              <?php } ?>

               </tbody>
              </table>


         </div>
        </div>
      </div>
    </div> 
  </div>

<script type="text/javascript">
  $(document).ready(function() {
          $('#datostabla').DataTable({language: {
                                          "decimal": "",
                                          "emptyTable": "No hay información",
                                          "info": "Mostrando _START_ - _END_ de _TOTAL_ Datos",
                                          "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                          "infoFiltered": "(Filtrado de _MAX_ total Datos)",
                                          "infoPostFix": "",
                                          "thousands": ",",
                                          "lengthMenu": "Mostrar _MENU_ Datos",
                                          "loadingRecords": "Cargando...",
                                          "processing": "Procesando...",
                                          "search": "Buscar:",
                                          "zeroRecords": "Sin resultados encontrados",
                                          "paginate": {
                                              "first": "Primero",
                                              "last": "Ultimo",
                                              "next": "Siguiente",
                                              "previous": "Anterior"
                                                      }
                                              }
                                      });
                                              
                                    });
</script>
<script src="../../js/clientes.js"></script>
<script src="../../js/idioma.js"></script>
<?php  include("componentes/final.php"); ?>