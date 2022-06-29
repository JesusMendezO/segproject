<?php

include('../Conexion/conexion.php');

$Rut_Cliente = $_POST["cliente"];
$especialidad = $_POST["especialidad"];
$material = $_POST["material"];
$cantidad = $_POST["cantidad"];
$cuadrilla = $_POST["cuadrilla"];
//validar que seleccionen solo las cuadrillas "desocupadas"
$inicio = $_POST["inicio"];

$insertar = "INSERT INTO proyecto(Rut_Cliente,id_especialidad,id_materialoproducto,cantidadProducto,Fecha_Inicio,id_cuadrilla  ) 
VALUES ( '$Rut_Cliente','$especialidad','$material','$cantidad','$inicio','$cuadrilla')";




$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaCliente.php');
    die;
} else {
    echo 'error';
}
