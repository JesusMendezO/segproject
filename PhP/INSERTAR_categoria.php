<?php

include('../Conexion/conexion.php');

$categoria = $_POST["categoria"];


$insertar = "INSERT INTO categoria(Nombre) 
VALUES ( '$categoria')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
