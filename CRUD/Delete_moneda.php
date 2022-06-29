<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM moneda where ID_moneda='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/TipoMoneda.php');
    die;
}
