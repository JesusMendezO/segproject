<?php

include('../Conexion/conexion.php');

$nombre = $_POST["nombre"];
$id = $_POST["id"];



$sql = "UPDATE especialidad SET Nombre='$nombre' WHERE id_Especialidad='$id' ";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Maestro/Maestro.php');
    die;
} else {
    echo $nombre;
}
