<?php

if(isset($_POST['ID']) && isset($_POST['ID']) != "")
{

    include("db_connection.php");


    $user_id = $_POST['ID'];


    $query = "DELETE FROM registro WHERE ID = '$user_id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>