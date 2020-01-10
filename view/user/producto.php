<?php
include 'include/controller.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
       
    <script src="js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
    <script>
        $(document).ready(function() {
                $('#example').DataTable({language: {
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


    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>

<body onload="myFunction()" style="margin:0;">

  <ul class="pager">
    <li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo </a></li>
  </ul> 


    <div class="container">
 
        
        <table id="example" class="display nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Tipo</th>                   
                    <th>Familia</th>
                    <th>Marca</th>
                    <th>N°Serie<th>                    
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Codigo</th>
                    <th>Tipo</th>                 
                    <th>Familia</th>
                    <th>Marca</th>
                    <th>N°Serie<th>                    
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
    
                $sql = "SELECT  id, tipo, codigo, familia, marca, num_serie, cantidad FROM equipos";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        
                        while($row = $result->fetch_assoc()) {
                            $id = $row['id'];
                            $tipo = $row['tipo'];
                            $codigo = $row['codigo'];
                            $familia = $row['familia'];
                            $marca = $row['marca'];
                            $num_serie = $row['num_serie'];
                            $cantidad = $row['cantidad'];

                            if($cantidad == 0){
                                $alert = "<div class='alert alert-danger'>
                                <strong>$cantidad</strong> No Stock</div>";
                            }else if($num_serie >= $cantidad){
                                $alert = "<div class='alert alert-success'>
                                <strong>$cantidad</strong> En Stock</div>";
                            }else {
                                $alert = "<div class='alert alert-success'>
                                <strong>$cantidad</strong> En Stock</div>";
                            }

                    ?>
                <tr>
                    <td>
                        <?php echo $codigo; ?>
                    </td>
                    <td>
                        <?php echo $tipo; ?>
                    </td>
                    
                    <td>
                        <?php echo $familia; ?>
                    </td>
                    <td>
                        <?php echo $marca; ?>
                    </td>
                    <td>                        
                        <?php echo $num_serie; ?>    
                    </td>
                    <td>                                           
                    </td>

                    <td>
                        <?php echo $alert; ?>
                    </td>
                    <td>
                        <a href="#add<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button>
                        </a>
                        <a href="#edit<?php echo $id;?>" data-toggle="modal">
                            <button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button>
                        </a>
                       
                    </td>
               
                    <div id="add<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">
                           
                            <div class="modal-content">
                                <form method="post" class="form-horizontal" role="form">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Agregar Stocks</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="tipo">Tipo:</label>
                                            <div class="col-sm-3">
                                                <input type="hidden" name="add_stocks_id" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Item Name" required readonly value="<?php echo $tipo; ?>"> </div>

                                            <label class="control-label col-sm-2" for="codigo">Codigo:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Item Code" required readonly value="<?php echo $codigo; ?>"> </div>

                                            <label class="control-label col-sm-1" for="serie">#Serie:</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control" id="serie" name="serie" placeholder="#Serie" autocomplete="off" required>
                                            </div>
                                        <br>
                                        <br>

                                        </div>
                                       
                                        <div class="form-group">
                                         <label class="control-label col-sm-2" for="tipo">Marca:</label>
                                            <div class="col-sm-2">
                                                
                                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" required readonly value="<?php echo $marca; ?>"> 
                                            </div>

                                             <label class="control-label col-sm-2" for="tipo">#Guia:</label>
                                            <div class="col-sm-2">
                                              <input type="text" class="form-control" id="guia" name="guia" placeholder="#Guia" required "> </div> 


                                              <label class="control-label col-sm-2" for="tipo">#Factura:</label>
                                            <div class="col-sm-2">
                                               
                                                <input type="text" class="form-control" id="factura" name="factura" placeholder="#Factura" required "> </div>    

                                        </div>        
                                       
                                        <br>
                                        <br>
                                        <br>

                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="tipo">Cantidad:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" autocomplete="off" required min="1"> </div>
                                       
                                            <label class="control-label col-sm-2" for="encargado">Encargado:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="encargado" name="encargado" placeholder="encargado" value = "<?php echo ucfirst($_SESSION['nombre']);?> <?php echo ucfirst($_SESSION['apellido']);?>" >
                                            </div>

                                        </div>
                                        <br>
                                        <br>
                                            <div class="form-group">
                                             <label class="control-label col-sm-2" for="tipo">Observaciones:</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones"></textarea>
                                            </div>
                                            </div>
                                        <br>
                                        <br>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="add_inventory"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                 
           
                   
                    <div id="edit<?php echo $id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                
                                <div class="modal-content">

                                  <div class="modal-body"> 
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Editar - Equipo</h4>
                                    </div>
                                        <br>
                                        
                                        <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            
                                            <label class="control-label col-sm-2" for="num_serie">Serie:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="num_serie" name="num_serie" value="<?php echo $num_serie; ?>" placeholder="N°Serie" required autofocus> </div>
                                                                               
                                            <label class="control-label col-sm-2" for="codigo">Codigo:</label>
                                            <div class="col-sm-4">
                                                <input type="text"  class="form-control" id="codigo" name="codigo" value="<?php echo $codigo; ?>" placeholder="Codigo - Equipo" required> </div>
                                            <br>
                                            <br>                                                                       

                                        </div>
                                        
                                        <div class="form-group">

                                            <label class="control-label col-sm-2" for="tipo">Nombre:</label>
                                            <div class="col-sm-4">
                                            <input type="text" readonly class="form-control" id="tipo" name="tipo" value="<?php echo $tipo; ?>" placeholder="Nombre" required autofocus> </div>

                                            <label class="control-label col-sm-2" for="marca">Marca:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="marca" name="marca" placeholder="Marca" required value="<?php echo $marca; ?>">
                                            <br>
                                                      
                                            </div>
                                           
                                        </div>

                                        <div class="form-group">
                                         <label class="control-label col-sm-2" for="familia">Familia:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="familia" name="familia" value="<?php echo $familia; ?>" placeholder="Familia" required> 
                                            </div>
                                        </div>  
                                         <br>
                                        <br>
                                    </div>
                                        <br>
                                        <br>
                                        <br>
                                        
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Editar</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>           
                </tr>

 <?php
                   }


                        
                        if(isset($_POST['update_item'])){
                            $edit_item_id = $_POST['edit_item_id'];
                            $tipo = $_POST['tipo'];
                            $codigo = $_POST['codigo'];
                            $familia = $_POST['familia'];
                            $marca = $_POST['marca'];
                            $num_serie = $_POST['num_serie'];
                            $cantidad = $_POST['cantidad'];

                            $sql = "UPDATE equipos SET 
                                tipo='$tipo',
                                codigo='$codigo',
                                familia='$familia',
                                marca='$marca',
                                num_serie = '$num_serie',
                                cantidad = '$cantidad'
                                WHERE id='$edit_item_id' ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="producto.php"</script>';
                            } else {
                                echo "Error en actualizar: " . $conn->error;
                            }
                        }

                        }


                    if(isset($_POST['add_inventory'])){
                        $add_stocks_id = clean($_POST['add_stocks_id']);
                        $observaciones = clean($_POST["observaciones"]);
                        $cantidad = clean($_POST['cantidad']);
                        $codigo = clean($_POST['codigo']);
                        $guia= clean($_POST['guia']);
                        $factura = clean($_POST['factura']);
                        $serie = clean($_POST['serie']);
                        $encargado = clean($_POST['encargado']);
                        $sql = "INSERT INTO entrada_salida_equipos(date,tipo,codigo, serie,marca,cantidad, entrada_salida, guia, factura, observaciones, encargado)VALUES ('$date_time','$tipo','$codigo','$serie' ,'$marca','$cantidad','Entrada','$guia', '$factura', '$observaciones', '$encargado')";
                        if ($conn->query($sql) === TRUE) {
                            $add_inv = "UPDATE equipos SET cantidad=(cantidad + '$cantidad') WHERE id='$add_stocks_id' ";
                            if ($conn->query($add_inv) === TRUE) {
                                echo '<script>window.location.href="producto.php"</script>';
                            } else {
                                echo "Error al actualizar registro: " . $conn->error;
                            }
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

?>            

            </tbody>
        </table>
    </div>

</body>

</html>
