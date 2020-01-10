
<?php include("db.php"); ?>

<?php include("componentes/encabezado.php"); ?>

<?php include("controladores/equipoControlador.php"); ?>

<?php 

if(isset($_POST['add_familia'])){
                                            
                        $nombre = $_POST['nombre'];
                      
                        $sql = "INSERT INTO familias(nombre) VALUES ('$nombre')";

                        if ($conn->query($sql) === TRUE) {
                                                    
                                echo '<script>window.location.href="registro-equipos.php"</script>';                          
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

if(isset($_POST['add_tipo'])){
                                            
                        $nombre = $_POST['nombre'];
                      
                        $sql = "INSERT INTO tipos(nombre) VALUES ('$nombre')";

                        if ($conn->query($sql) === TRUE) {
                                                    
                                echo '<script>window.location.href="registro-equipos.php"</script>';                          
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

if(isset($_POST['add_marca'])){
                                            
                        $nombre = $_POST['nombre'];
                      
                        $sql = "INSERT INTO marcas(nombre) VALUES ('$nombre')";

                        if ($conn->query($sql) === TRUE) {
                                                    
                                echo '<script>window.location.href="registro-equipos.php"</script>';                          
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

if(isset($_POST['add_modelo'])){
                                            
                        $nombre = $_POST['nombre'];
                      
                        $sql = "INSERT INTO modelos(nombre) VALUES ('$nombre')";

                        if ($conn->query($sql) === TRUE) {
                                                    
                                echo '<script>window.location.href="registro-equipos.php"</script>';                          
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }                    
?> 





  <ul class="pager">
    <li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo </a></li>
  </ul>  

    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          
          <div class="spacing-1"></div>

          <form action="registro-equipos.php" method="POST" id="formulario_registro">
           
            <fieldset>

              <legend class="center">Registro Equipos</legend>
              <div class="row">
                <div class="col-10">
               <label class="sr-only" for="user">Familia</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"> Familia</i></div>
                <select type="text"  class="form-control" name="familia" placeholder="Familia">
    
                <?php

                $query = "SELECT nombre FROM familias";

                $res = mysqli_query($conn, $query);

                while ($row=mysqli_fetch_array($res)) {
                 ?>

                 <option value="<?php echo $row['nombre'] ?>" ><?php echo $row['nombre'] ?></option>
               <?php } ?>
                </select>
              </div>
              </div>

                <div class="col-2">
                  <div class="dropdown">
                  <a href="#agregar" data-toggle="modal">
                     <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'>
                    </span>
                   </button>
                  </a>
                </div>
                </div>
               </div>
          
               

              <div class="spacing-2"></div>

            <div class="row">
              <div class="col-10">
               <label class="sr-only" for="user">Tipos:</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"> Tipo     </i></div>
                <select type="text"  class="form-control" name="tipo" placeholder="Tipos">
    
                <?php

                $query = "SELECT nombre FROM tipos";

                $res = mysqli_query($conn, $query);

                while ($row=mysqli_fetch_array($res)) {
                 ?>

                 <option value="<?php echo $row['nombre'] ?>" ><?php echo $row['nombre'] ?></option>
               <?php } ?>
                </select>
              </div>
              </div>

                <div class="col-2">
                  <div class="dropdown">
                  <a href="#agregar-tipos" data-toggle="modal">
                     <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'>
                    </span>
                   </button>
                  </a>
                </div>
                </div>
               </div>


              <div class="spacing-2"></div>

               <div class="row">
                <div class="col-10">
               <label class="sr-only" for="user">Marca</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"> Marca  </i></div>
                <select type="text"  class="form-control" name="marca" placeholder="Marca">
    
                <?php

                $query = "SELECT nombre FROM marcas";

                $res = mysqli_query($conn, $query);

                while ($row=mysqli_fetch_array($res)) {
                 ?>

                 <option value="<?php echo $row['nombre'] ?>" ><?php echo $row['nombre'] ?></option>
               <?php } ?>
                </select>
              </div>
              </div>

                <div class="col-2">
                  <div class="dropdown">
                  <a href="#agregar-marcas" data-toggle="modal">
                     <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'>
                    </span>
                   </button>
                  </a>
                </div>
                </div>
               </div>
          

          
              <div class="spacing-2"></div>

                           <div class="row">
                <div class="col-10">
               <label class="sr-only" for="user">Modelo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"> Modelo</i></div>
                <select type="text"  class="form-control" name="modelo" placeholder="Modelo">
    
                <?php

                $query = "SELECT nombre FROM modelos";

                $res = mysqli_query($conn, $query);

                while ($row=mysqli_fetch_array($res)) {
                 ?>

                 <option value="<?php echo $row['nombre'] ?>" ><?php echo $row['nombre'] ?></option>
               <?php } ?>
                </select>
              </div>
              </div>

                <div class="col-2">
                  <div class="dropdown">
                  <a href="#agregar-modelos" data-toggle="modal">
                     <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'>
                    </span>
                   </button>
                  </a>
                </div>
                </div>
               </div>
          

                <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Part Number</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="partnumber" placeholder="Part Number">
              </div>
     
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <input type="submit" class="btn btn-primary btn-block" name="save-equipos" id="registro_equipos" value="Registrar">
                </div>
              </div>

            </fieldset>
          </form>
        </div>
     



  <div class="col-9">
    


    <div class="col-md-12" style="text-align: center; margin: 0 auto;">
      <h2>Listado - Equipos</h2>
     
      <table id="datos-tabla" class="table table-bordered">
        
        <thead>
          
          <tr>
            <th>Familia</th>
            <th>Tipo</th>             
            <th>Marca</th>
            <th>Modelo</th>
            <th>Part - Number</th>  
            <th>Acciones</th>
          </tr>

        </thead>
        <tbody>
          
          <?php 
          
            $query = "SELECT * FROM equipos";
            $result_equipo = mysqli_query($conn, $query);


            if($result_equipo->num_rows > 0){


            while($row = mysqli_fetch_array($result_equipo)) { ?>
              
            <tr>
              <td><?php echo $row['familia'] ?></td>
              <td><?php echo $row['tipo'] ?></td>
              <td><?php echo $row['marca'] ?></td>
              <td><?php echo $row['modelo'] ?></td>
              <td><?php echo $row['partnumber'] ?></td>
            

              <td>
                <a style='width:35px; height:30px' class="btn btn-primary btn-warning" href="tablas-acciones/editar-e.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil" ></i></a>
                <a  style='width:35px; height:30px' class="btn btn-primary btn-danger" href="tablas-acciones/eliminar-e.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a>
              </td>

            </tr> 

          <?php } ?>

        </tbody>


      </table>

      <?php }else{
        echo "No hay registros :(";
      }

       ?>



    </div>
  </div>
 </div>

      <div id="agregar" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Agregar Familia</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                           
                                            <label class="control-label col-sm-4" for="nombre">Nombre -  Familia:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el Nombre" autocomplete="off" required>
                                            </div>
                                       </div> 
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_familia"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div id="agregar-tipos" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Agregar Tipos</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                           
                                            <label class="control-label col-sm-4" for="nombre">Nombre -  Tipo:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el Nombre" autocomplete="off" required>
                                            </div>
                                       </div> 
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_tipo"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="agregar-marcas" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Agregar Marcas</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                           
                                            <label class="control-label col-sm-4" for="nombre">Nombre -  Marca:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el Nombre" autocomplete="off" required>
                                            </div>
                                       </div> 
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_marca"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div id="agregar-modelos" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                       
                                        <h4 class="modal-title">Agregar Modelos</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                           
                                            <label class="control-label col-sm-4" for="nombre">Nombre -  Modelo:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduzca el Nombre" autocomplete="off" required>
                                            </div>
                                       </div> 
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_modelo"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

</div>


       

<script src="../../js/idioma.js"></script>

<?php  include("componentes/final.php"); ?>