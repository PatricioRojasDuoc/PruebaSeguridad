<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$tipo=$_POST['tipo'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","seguridad");

$consulta="SELECT usuario, contraseña,tipo  FROM usuarios 
where usuario='$usuario' and contraseña='$contraseña' and tipo='$tipo'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    if (isset($_SESSION['$usuario'] and $_SESSION['$tipo']) == true){
    header("location:home.php");
    }else{
        ?>
        <?php
        include("index.php");
        ?>
        <h1>Error en la Autenticacion2</h1>
        <?php
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
