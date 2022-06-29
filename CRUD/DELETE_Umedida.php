<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM unidadmedida where ID_UnidadMedida ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/UnidadDeMedida.php');
    die;
}
