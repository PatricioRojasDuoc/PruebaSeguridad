<<gh-repo-clone-PatricioRojasDuoc/PruebaSeguridad
<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion= mysqli_connect("localhost","root","","seguridad");

$consulta="SELECT usuario, contraseña FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error en la Autenticacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion= mysqli_connect("localhost","root","","seguridad");

$consulta="SELECT usuario, contraseña FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error en la Autenticacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
main
