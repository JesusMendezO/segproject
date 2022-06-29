<?php
include('../../Conexion/conexion.php');

$cliente = filter_input(INPUT_POST, 'cliente');

$sql = "SELECT * FROM contrato WHERE id_cliente = $cliente";

$query = $conn->query($sql);


$total = mysqli_num_rows($query);




if ($total = !0) {
    while ($valores = mysqli_fetch_array($query)) {
        $contenedor = $valores['listservicio'];
        $sql2 = "SELECT Nombre FROM listaservicio WHERE ID_lista = $contenedor";
        $query2 = $conn->query($sql2);
        $fila = mysqli_fetch_array($query2);
        echo '<option value="' . $valores['id_contrato'] . '">' . $fila['Nombre'] . '</option>';
        //por defecto se creará como libre        
    }
}
