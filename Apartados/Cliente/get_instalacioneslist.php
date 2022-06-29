<?php
    include('../../Conexion/conexion.php');
    $Rut= $_POST['id_cliente'];
    $sql = "SELECT * FROM instalacion WHERE id_cliente = $Rut";
    $html = "";
    $query = $conn->query($sql);
      while ($valores = mysqli_fetch_array($query)) {
        $html.='<option value="' . $valores['id_instalacion'] . '">' . $valores['nombre'] . '</option>';
          //por defecto se creará como libre
      }
      echo $html;
?>