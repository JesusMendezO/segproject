<?php

include('../Conexion/conexion.php');

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];


$insertar = "INSERT INTO subcategoria(NombreSubcategoria,id_Categoria) 
VALUES ( '$nombre','$categoria')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
