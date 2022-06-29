<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM especialidad where id_Especialidad ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/Especialidad.php');
    die;
}
