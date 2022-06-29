<?php

include('../Conexion/conexion.php');

$ruut = $_GET['id'];

$sql = "DELETE FROM proveedor where Rut ='$ruut'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Adquisiciones/FichaProveedor.php');
    die;
}
