<?php
     include('../../Conexion/conexion.php');
     $Rut= $_POST['id_cliente'];
     $sql = ("SELECT * FROM cliente where Rut='$Rut'");
                               $query = $conn->query($sql);
                              $valores = mysqli_fetch_array($query);
                            //  $html=$valores['Rut'];
                            //  $html.=$valores['Nombre'];

                             $datos= array (
                                    "Rut" => $valores['Rut'],
                                    "Direccion"=> $valores['Direccion'],
                                    "Email"=> $valores['Email'],
                                    "Representante"=> $valores['Representante']
                                    
                          );
                            //  for($i=0;$i<count($valores);$i++) 
                            //  {
                            //    $html.="<option value='".$valores[$i]['Rut']."'>".$valores[$i]['Rut']."</option>"; 
                            //  }
                            //    while ($valores = mysqli_fetch_array($query)) {
                            //    $html.="<option value='".$valores['Rut']."'>".$valores['Rut']."</option>";
                               
                              
                            //  }

                             echo json_encode($datos);
                                                               
?>