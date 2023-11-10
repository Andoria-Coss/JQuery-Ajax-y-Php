<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $nombre = $_POST['nombre'];
	$dia=$_POST['dia'];
	//$sapepat=$_POST['sapepat'];
   
   
    


    // Updaste User details
    $query = "UPDATE registro SET nombre='$nombre', dia='$dia' WHERE nombre = '$nombre'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}