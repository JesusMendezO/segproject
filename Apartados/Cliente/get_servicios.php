<?php
    include('../../Conexion/conexion.php');
    $id= $_POST['elegido'];
    $html = "";
    $sql = ("SELECT * FROM servicios where id_ListaServicio='$id' ");
    $query = $conn->query($sql);
      while ($valores = mysqli_fetch_array($query)) {
        $html.='<option value="' . $valores['id'] . '">' . $valores['Nombre'] . '</option>';
          //por defecto se creará como libre
      }
      echo $html; 
?>