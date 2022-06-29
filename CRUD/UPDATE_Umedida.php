<?php

include('../Conexion/conexion.php');

$Umedida = $_POST["Umedida"];
$id = $_POST["id"];


$sql = "UPDATE unidadmedida SET Nombre='$Umedida' WHERE ID_UnidadMedida= '$id'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/UnidadDeMedida.php');
    die;
} else
    echo "error";
