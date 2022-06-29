<?php
     include('../../Conexion/conexion.php');
     
     $sql = "SELECT * FROM servicios ";

     $query = $conn->query($sql);
     while($array = mysqli_fetch_assoc($query)){
        // This will return multiple rows
        $row[] = $array;
    }
     
     $total = mysqli_fetch_array($query);
     echo   json_encode($row)                                                     
?>