<?php

include('../Conexion/conexion.php');

$nameProveedor = $_POST["nameProveedor"];
$rutProveedor = $_POST["rutProveedor"];
$telefono = $_POST["telefono"];
$Actividad = $_POST["Actividad"];
$pais = $_POST["pais"];
$region = $_POST["region"];
$ciudad = $_POST["ciudad"];
$direccion = $_POST["direccion"];
$PPago = $_POST["PPago"];
$CorreoPago = $_POST["CorreoPago"];
$NombreRepresentante = $_POST["NombreRepresentante"];
$nrocuenta = $_POST["nrocuenta"];
$LineCredit = $_POST["LineCredit"];
$DirecPago = $_POST["DirecPago"];




$sql = "UPDATE proveedor SET Rut= '$rutProveedor', Nombre_Empresa='$nameProveedor', Actividad='$Actividad',Pais ='$telefono',Actividad='$Actividad',Pais='$pais',Region ='$region',Ciudad='$ciudad',
Direccion='$direccion',Banco_Proveedor='$DirecPago',NumeroCuentaProveedor='$nrocuenta',LineaCredito='$LineCredit',correo='$CorreoPago',Plazopago='$PPago',telefono='$telefono',
Representante='$NombreRepresentante' WHERE Rut = '$rutProveedor'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Adquisiciones/FichaProveedor.php');
    die;
}
