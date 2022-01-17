<?php
$usuario=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//Prueba de subida de archivo
$conexion=mysqli_connect("localhost","root","","database_to_import");

$consulta="SELECT*FROM users where email='$usuario' and password='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas){
  
    header("location:home.php"); //si existe deberia mostrar el header logueado

}else{
  echo'<script type="text/javascript">
  alert("Usuario o contraseña incorrectos");
  window.location.href="sign-in.php";
    </script>';

}
// print_r($filas);
// print_r($usuario);
// print_r($contraseña);
// print_r($conexion);
// mysqli_free_result($resultado);
// mysqli_close($conexion);
?>
