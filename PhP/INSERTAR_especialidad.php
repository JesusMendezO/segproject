<?php
include('../Conexion/conexion.php');
$nombre = $_POST['nombre'];

$insertar = "INSERT INTO especialidad(Nombre) 
VALUES ( '$nombre')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/Especialidad.php');
    die;
}
