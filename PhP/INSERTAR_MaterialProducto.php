<?php

include('../Conexion/conexion.php');

$Nombre = $_POST['Nombre'];

$codigo = $_POST['codigo'];
$modelo = $_POST['modelo'];
$Descripcion = $_POST['Descripcion'];
$rubro = $_POST['rubro'];
$categoria = $_POST['categoria'];
$subcategoria = $_POST['subcategoria'];
$unidadmedida = $_POST['unidadmedida'];
$afectoexento = $_POST['afectoexento'];
$listaprecios = $_POST['listaprecios'];
$listamonedas = $_POST['listamonedas'];

$cantidad = $_POST['cantidad'];
$bodega = $_POST['bodega'];
$stock = $_POST['stock'];
$Stockminimo = $_POST['Stockminimo'];
$valorUni = $_POST['valorUni'];
$img = $_POST['img'];


$insertar = "INSERT INTO `materialoproducto` (CodigoMP, Nombre, ID_TipoModelo, Descripcion, Rubro_Asociado, Categoria_id, SubCategoria_id, 
AlertaStock, StockMinimo, ValorUnitario, Unidad_Medida_id, Afectoexento, id_listaPrecio, Cantidad, Id_Bodega, Tipo_Moneda,imagen) 
VALUES ('$codigo', '$Nombre', '$modelo', '$Descripcion', '$rubro', '$categoria', '$subcategoria', '$stock', '$Stockminimo',
 '$valorUni', '$unidadmedida', '$afectoexento', '$listaprecios', '$cantidad', '$bodega', '$listamonedas','$img')";

$resultado = mysqli_query($conn, $insertar);

if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
