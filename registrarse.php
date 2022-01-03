<?php
//include('bd.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['DNI'];
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['usuario']=$usuario;

//Prueba de subida de archivo
$conexion=mysqli_connect("localhost","root","1234","replay");
$consulta="SELECT*FROM usuarios where correo='$usuario' and contrasena='$contraseña'";  
//$insertar="INSERT INTO usuarios (nombre, apellido, dni, correo, contrasena) values ($nombre, $apellido, $dni, $correo, $contrasena)";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    print_r("Existe un usuario"); //hay que agregar una señalizacion

}else{
  $insert_value = "INSERT INTO usuarios (nombre, apellido, dni, correo, contrasena) values ('$nombre', '$apellido', '$dni', '$correo', '$contrasena')";
 
  mysqli_select_db($conexion);
  $retry_value = mysqli_query($conexion, $insert_value);
   
  if (!$retry_value) {
     die('Error: ' . mysql_error());
  }
   
  header('Location: sign-in.php');
  }
   
  mysql_close($conexion);
   
  ?>


