

<?php
include('../Conexion/conexion.php');

$NombreTipo = $_POST["NombreTipo"];

$insertar = "INSERT INTO tipomodelo(Nombre) 
VALUES ( '$NombreTipo')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
?>