<?php

include('../Conexion/conexion.php');

$TipoCuadrilla = $_POST["Tcuadrilla"];
$Alias = $_POST["AliasCua"];
$id = $_POST["id"];


$sql = "UPDATE cuadrilla SET Tipo_cuadrilla='$TipoCuadrilla', Alias='$Alias' WHERE id_personal= '$id'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/Cuadrilla.php');
    die;
}
