<?php

include('../../../Conexion/conexion.php');

$NombreCargo = $_POST["NombreCargo"];
$identificador = $_POST["id"];
$sql = "UPDATE tipocargo SET Nombre_Cargo='$NombreCargo' WHERE id_cargo='$identificador'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Cargo.php');
    die;
}
