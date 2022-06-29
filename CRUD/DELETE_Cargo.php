<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM tipocargo where id_cargo ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/Cargo.php');
    die;
}
