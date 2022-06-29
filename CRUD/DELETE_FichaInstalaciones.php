<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM instalacion where id_instalacion ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaInstalaciones.php');
    die;
}
