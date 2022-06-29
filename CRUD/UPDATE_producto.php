<?php

include('../Conexion/conexion.php');

$codigo = $_POST["codigo"];
$nombre = $_POST["Nombre"];
$modelo = $_POST["modelo"];
$Descripcion = $_POST["Descripcion"];
$rubro = $_POST["rubro"];
$categoria = $_POST["categoria"];
$subcategoria = $_POST["subcategoria"];
$unidadmedida = $_POST["unidadmedida"];
$afectoexento = $_POST["afectoexento"];
$listaprecios = $_POST["listaprecios"];
$listamonedas = $_POST["listamonedas"];
$cantidad = $_POST["cantidad"];

$stock = $_POST["stock"];
$Stockminimo = $_POST["Stockminimo"];
$valorUni = $_POST["valorUni"];
$bodega = $_POST["bodega"];


$sql = "UPDATE materialoproducto SET CodigoMP= '$codigo', Nombre='$nombre', ID_TipoModelo='$modelo',Descripcion ='$Descripcion',
Rubro_Asociado='$rubro',Categoria_id='$categoria',SubCategoria_id ='$subcategoria',AlertaStock='$stock',
StockMinimo='$Stockminimo',ValorUnitario='$valorUni',Unidad_Medida_id='$unidadmedida',Afectoexento='$afectoexento',id_listaPrecio='$listaprecios',
Cantidad='$cantidad',Id_Bodega='$bodega',
Tipo_Moneda='$listamonedas' WHERE CodigoMP = '$codigo'";

$resultado = mysqli_query($conn, $sql);
if ($resultado) {
    echo "<script>alert('Registrado con éxito')</script>";
    header('Location:../Apartados/Bodega/Bodega.php');
    die;
}
