<?php

include('../Conexion/conexion.php');

$cliente = $_POST["cliente"];
$NomIns = $_POST["NomIns"];
$AddressIns = $_POST["AddressIns"];

$TipIns = $_POST["TipIns"];


$sql1 = mysqli_query($conn, "SELECT * FROM instalacion WHERE id_cliente='$cliente' OR nombre='$NomIns' OR direccion='$AddressIns' ");


$valores = mysqli_fetch_row($sql1);
$rpta = $valores[0];

$sql = "UPDATE instalacion SET id_cliente='$cliente',nombre='$NomIns',direccion='$AddressIns' WHERE id_instalacion='$rpta'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaInstalaciones.php');
    die;
}
