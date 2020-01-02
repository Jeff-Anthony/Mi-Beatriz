

<?php

require_once('../../model/conexion.php');


Class Equipos extends Conexion
{

public function registroEquipo($familia, $tipo, $marca, $modelo, $partnumber){

	parent::conectar();

	$familia = parent::filtrar($familia);
	$tipo = parent::filtrar($tipo);
	$marca = parent::filtrar($marca);
	$modelo = parent::filtrar($modelo);
	$partnumber = parent::filtrar($partnumber);

	$verificarPart = parent::verificarRegistros('select id from equipos where partnumber="'.$partnumber.'" ');

	if($verificarPart > 0){

		echo 'error_3';

	}else{

		 parent::query('insert into equipos(familia, tipo, marca, modelo, partnumber) values("'.$familia.'", "'.$tipo.'", "'.$marca.'", "'.$modelo.'", "'.$partnumber.'"');

	}

	parent::cerrar();
}


}


?>