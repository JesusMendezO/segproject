<?php
    include('../../Conexion/conexion.php');

    $sql = ("SELECT * FROM listaservicio");
    $query = $conn->query($sql);
      while ($valores = mysqli_fetch_array($query)) {
          echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
          //por defecto se creará como libre
      }

?>