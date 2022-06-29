<?php

include('../Conexion/conexion.php');

$cliente = $_POST["cliente"];
$RUTEncarg = $_POST["RUTEncarg"];
$Nom_Encarg = $_POST["Nom_Encarg"];
$EmailEncarg = $_POST["EmailEncarg"];
$TlfEncarg = $_POST["TlfEncarg"];
$estado_encarg = $_POST["estado_encarg"];



$insertar = "INSERT INTO encargado(id_rut,nombre,telefono,correo,id_cliente_asociado,estado_encargado) 
VALUES ('$RUTEncarg','$Nom_Encarg','$TlfEncarg','$EmailEncarg','$cliente','$estado_encarg')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Cliente/FichaEncargados.php');
    die;
}
