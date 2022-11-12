<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","pruebaseguridad");

$consulta="SELECT usuario, cotraseña  FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    if (isset($_SESSION['loggedin']) == true){
    header("location:home.php");
    }
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1>Error en la Autenticacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
