<?php

include('../Conexion/conexion.php');

$cliente = $_POST["cliente"];
$NomIns = $_POST["NomIns"];
$AddressIns = $_POST["AddressIns"];

$TipIns = $_POST["TipIns"];


$insertar = "INSERT INTO instalacion(id_cliente,nombre,direccion,TipoInstalacion) VALUES ('$cliente','$NomIns','$AddressIns','$TipIns')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaInstalaciones.php');
    die;
} else {
    echo 'error';
}
