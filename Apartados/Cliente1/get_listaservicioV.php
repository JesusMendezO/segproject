<?php
    include('../../Conexion/conexion.php');

    $listaservicio = filter_input(INPUT_POST, 'listaservicio');

    $sql = "SELECT id_piping,Nombre FROM listaserviciopiping WHERE id_ListaServicio = $listaservicio";
    $sql1 = "SELECT id_electronica,Nombre FROM listaservicioelectronica WHERE id_ListaServicio = $listaservicio";
    $query = $conn->query($sql);
    $query2 = $conn->query($sql1);

    $total = mysqli_num_rows($query);
    $total1 = mysqli_num_rows($query2);
    
 
        if($total1 =! 0){
            while ($valores = mysqli_fetch_array($query2)){
                echo '<option value="' . $valores['id_electronica'] . '">' . $valores['Nombre'] . '</option>';
            }    
        }if($total =! 0){
            while ($valores = mysqli_fetch_array($query)){
                echo '<option value="' . $valores['id_piping'] . '">' . $valores['Nombre'] . '</option>';
                //por defecto se creará como libre        
            }
        }
       


?>