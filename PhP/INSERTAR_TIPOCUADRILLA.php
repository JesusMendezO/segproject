<?php

include('../Conexion/conexion.php');

$TipoCuadrilla = $_POST["TipoCuadrilla"];
$estado = 'Libre';
$Alias = $_POST["Alias"];

$insertar = "INSERT INTO cuadrilla(Tipo_cuadrilla,Alias,Estado) 
VALUES ( '$TipoCuadrilla','$Alias','$estado')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Empleado/ConfiguracionEmpleado.php ');
    die;
} else {
    // Mostrar el sweet alert
}
