<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM cuadrilla where id_personal  ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php');
    die;
} else {
    echo 'error';
}
