<?php
	if(isset($_POST['nombre']) && isset($_POST['dia']) && isset($_POST['hora']) && isset($_POST['comentario']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$nombre = $_POST['nombre'];
		$dia = $_POST['dia'];
		$hora = $_POST['hora'];
		$comentario = $_POST['comentario'];

		$query = "INSERT INTO registro(nombre, dia, hora, comentario) VALUES('$nombre', '$dia', '$hora','$comentario')";
		error_log($query,0);
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1Registro Exitoso!";
	}
?>