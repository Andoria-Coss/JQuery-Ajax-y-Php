<?php

$conexion=mysqli_connect('localhost','root','','aaaprender');


$email = $_POST['email'];
$password = $_POST['password'];
$app=$_POST['app'];
$apm=$_POST['apm'];


$sql="INSERT INTO usuarios(cve, nombre, apepat, apemat) VALUES('$password','$email','$app','$apm') ";
$result=mysqli_query($conexion,$sql);

if($result)
{ 
         header("Location: ../index.html"); 
         echo 'Hola';
}   
else{
    echo "Error al enviar datos";
}

?>