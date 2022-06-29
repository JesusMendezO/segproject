<?php

include('../Conexion/conexion.php');

$fecha = $_POST["fecha"];
$Precio_neto = $_POST["Precio_neto"];
$iva = $_POST["iva"];
$margen = $_POST["margen"];
$final = $_POST["final"];
$proveedor = $_POST["proveedor"];



$insertar = "INSERT INTO listaprecios(Fecha,Precio_neto,iva,PrecioFinal,Margen,rut_proveedor) 
VALUES ( '$fecha','$Precio_neto','$iva','$final','$margen','$proveedor')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Adquisiciones/IngresarCompra.php');
    die;
}
