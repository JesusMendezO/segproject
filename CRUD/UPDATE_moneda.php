<?php

include('../Conexion/conexion.php');

$moneda = $_POST["moneda"];
$identificador = $_POST["id"];
$sql = "UPDATE moneda SET Nombre='$moneda' WHERE ID_moneda='$identificador'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/TipoMoneda.php');
    die;
}
