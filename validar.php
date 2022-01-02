<?php
//include('bd.php');
$usuario=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//Prueba de subida de archivo
$conexion=mysqli_connect("localhost","root","1234","replay");

$consulta="SELECT*FROM usuarios where correo='$usuario' and contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>

  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
print_r($filas);
print_r($usuario);
print_r($contraseña);
print_r($conexion);
mysqli_free_result($resultado);
mysqli_close($conexion);
