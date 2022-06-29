<?php
include('../Conexion/conexion.php');

$id_categoria = $_POST['id_Categoria'];

$query = "SELECT * FROM subcategoria WHERE id_Categoria ='$id_categoria'";
$resultado = mysqli_query($conn, $query);

$html = "<option value='0'>Seleccione SubCategoría</option>";;
while ($row = $resultado->fetch_assoc()) {

    $html = "<option value='" . $row['id_subcategoria'] . "'>" . $row['NombreSubcategoria'] . "</option>";
}
echo "<script>jQuery(function(){swal('¡Bien!', 'Condición cumplida', 'success');});</script>";
echo $html;
