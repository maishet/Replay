<?php
//include('bd.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['DNI'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];


session_start();
//$_SESSION['usuario']=$usuario;

//Prueba de subida de archivo
$conexion=new mysqli("localhost","root","1234","database_to_import");
$consulta="SELECT*FROM users where email='$correo' and password='$contraseña'";  
//$insertar="INSERT INTO usuarios (nombre, apellido, dni, correo, contrasena) values ($nombre, $apellido, $dni, $correo, $contrasena)";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    print_r("Existe un usuario"); //hay que agregar una señalizacion

}else{
  $insert_value = "INSERT INTO users (first_name, last_name, dni, email, password) values ('$nombre', '$apellido', '$dni', '$correo', '$contraseña')";
 
  mysqli_select_db($conexion, "database_to_import");
  $retry_value = mysqli_query($conexion, $insert_value);
   
  if (!$retry_value) {
     die('Error: '.mysqli_error($conexion));
  }
   
  header('Location: sign-in.php');
  }
   
  mysql_close($conexion);
   
  ?>


