


<?php include("db.php"); ?>

<?php include("componentes/encabezado.php"); ?>

<?php include("controladores/equipoControlador.php"); ?>

  
  <ul class="pager">
    <li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo </a></li>
  </ul>  

    <div class="container">
      <div class="row">
        <div class="col-3">
          
          <div class="spacing-1"></div>

          <form action="registro-equipos.php" method="POST" id="formulario_registro">
           
            <fieldset>

              <legend class="center">Registro Equipos</legend>

               <label class="sr-only" for="user">Familia</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="familia" placeholder="Familia">
              </div>

          
              <div class="spacing-2"></div>

          
              <label class="sr-only" for="user">Tipo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo">
              </div>

              <div class="spacing-2"></div>

                 <label class="sr-only" for="user">Marca</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="marca" placeholder="Marca">
              </div>

          
              <div class="spacing-2"></div>

             <label class="sr-only" for="user">Modelo</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-envelope-square"></i></div>
                <input type="text" class="form-control" name="modelo" placeholder="Modelo">
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
                <a style='width:35px; height:30px' class="btn btn-primary btn-danger" href="tablas-acciones/eliminar-e.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"></i></a>
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
</div>


<script src="../../js/idioma.js"></script>

<?php  include("componentes/final.php"); ?>