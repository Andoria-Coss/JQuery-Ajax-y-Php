<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  
  // Crear conexión con la base de datos.
  $conn=mysqli_connect('localhost','root','','aaaprender');
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
   
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM usuarios WHERE nombre='$email' AND cve = '$password'");
  $resultado = $conn->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: ../inicio.php"); 
	echo 'Hola';
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>