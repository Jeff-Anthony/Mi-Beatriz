<?php

$connect = mysqli_connect("localhost", "root", "", "mi_beatriz");

 $number = count($_POST["maestria"]);


if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		
		if(trim($_POST["maestria"][$i] != ''))
		{
			$sql = "INSERT INTO maestrias(usuario, maestria, año, grado) VALUES('".mysqli_real_escape_string($connect, $_POST["user"][$i])."','".mysqli_real_escape_string($connect, $_POST["maestria"][$i])."','".mysqli_real_escape_string($connect, $_POST["maestria_año"][$i])."','".mysqli_real_escape_string($connect, $_POST["maestria_grado"][$i])."')";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted";
}
else
{
	echo "Please Enter Name";
}

?>