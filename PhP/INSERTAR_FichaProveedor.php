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




$insertar = "INSERT INTO proveedor(Rut,Nombre_Empresa,Actividad,Pais,Region,Ciudad,Direccion,Banco_Proveedor,NumeroCuentaProveedor,
LineaCredito,correo,Plazopago,telefono,Representante) VALUES ('$rutProveedor','$nameProveedor','$Actividad','$pais','$region','$ciudad','$direccion','$DirecPago','$nrocuenta',
'$LineCredit','$CorreoPago','$PPago','$telefono','$NombreRepresentante')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Adquisiciones/FichaProveedor.php');
    die;
} else {
    echo "error";
}
