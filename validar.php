<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("54.226.41.52","Administrator","","seguridad");

$consulta="SELECT usuario, contraseña  FROM usuarios 
where usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    if (isset($_SESSION['$usuario'])){
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
