<?php
     include('../../Conexion/conexion.php');
     $Rut= $_POST['id_cliente'];
     $sql = "SELECT * FROM instalacion WHERE id_cliente = $Rut";

     $query = $conn->query($sql);
     while($array = mysqli_fetch_assoc($query)){
        // This will return multiple rows
        $row[] = $array;
    }
     
     $total = mysqli_fetch_array($query);
     echo   json_encode($row)                                                     
?>