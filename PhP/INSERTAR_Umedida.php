

<?php
include('../Conexion/conexion.php');

$Umedida = $_POST["Umedida"];

$insertar = "INSERT INTO unidadmedida(Nombre) 
VALUES ( '$Umedida')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/UnidadDeMedida.php');
    die;
}
?>