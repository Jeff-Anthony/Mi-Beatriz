

<?php include("../../db.php"); ?>

<?php include("../../componentes/encabezado.php"); ?>

 
	 <a href="../../registro-equipos.php">Regresar </a>

	 <?php

	 $busqueda = strtolower($_REQUEST['busqueda']);
	 if(empty($busqueda)){

	 	header("location: ../tabla-equipos.php");

	 }

	  ?>

<h2>Lista - Equipos</h2>

  	<form action="buscar-equipos.php" method="GET" class="form_search">
  	
        <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
        <input type="submit" value="Buscar" class="btn_search">
  
	</form>

	<div class="col-md-8" style="text-align: center; margin: 0 auto;">

		<table  class="table table-bordered">
			
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
				
					$query = "SELECT id, familia, tipo, marca, modelo, partnumber FROM equipos WHERE  (
												familia LIKE '%$busqueda%' OR
											 	tipo LIKE '%$busqueda%' OR
												marca LIKE '%$busqueda%' OR
												modelo LIKE '%$busqueda%' OR
												partnumber LIKE '%$busqueda%'
												
												)";
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
							<a class="btn btn-primary btn-warning" href="editar-e.php?id=<?php echo $row['id'] ?>"><i class="fas fa-marker" >Editar</i></a>
							<a class="btn btn-primary btn-danger" href="eliminar-e.php?id=<?php echo $row['id'] ?>"><i class="far fa-trash-alt">Eliminar</i></a>
						</td>

					</tr>	

				<?php } ?>

			</tbody>
		</table>

		<?php }else{
			echo "No registro";
		} ?>
	</div>

<?php  include("../../componentes/final.php"); ?>