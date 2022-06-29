<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM contrato where id_contrato ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/contrato.php');
    die;
}
