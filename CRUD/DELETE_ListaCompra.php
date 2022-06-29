<?php

include('../Conexion/conexion.php');

$id = $_GET['id'];

$sql = "DELETE FROM listaprecios where ID_ListaPrecio ='$id'";
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Adquisiciones/IngresarCompra.php');
    die;
}
