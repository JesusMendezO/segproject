 <div class="modal fade" id="CreateOSM<?php echo $filas['id_cliente']; ?>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header" style="background-color:#3f668d">
                 <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Servicio Mantención</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">


                 <form method="POST" action="../../CRUD/Update_cliente.php">
                     <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                         Datos del Servicio</h4>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputNombreCliente">Nombre de Cliente</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-user"></i>
                                 </div>
                                 <select class="form-control" name="region" id="region" value=<?php echo $filas['id_cliente'] ?>>
                                     <?php
                                        $sql = ("SELECT * FROM cliente");
                                        $query = $conn->query($sql);
                                        while ($valores = mysqli_fetch_array($query)) {
                                            if ($valores['Rut'] == $filas['id_cliente']) {
                                                // El selected sirve para mostrar el valor recibido de la consulta.
                                                echo '<option value="' . $valores['cliente'] . '">' . $valores['Nombre'] . '</option>';
                                            } else
                                                echo '<option value="' . $valores['cliente'] . '">' . $valores['Nombre'] . '</option>';
                                        }


                                        ?>
                                 </select>

                             </div>

                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputDireccion">Fecha de Visita</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-building"></i>
                                 </div>
                                 <input type="date" class="form-control" name="Fini" id="Fini" placeholder="<?php echo $filas['Finicio'] ?>" value="<?php echo $filas['Finicio'] ?>">
                             </div>

                         </div>

                     </div>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputDireccion">Estado De OSM</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-building"></i>
                                 </div>
                                 <select class="form-control" name="Estado" id="Estado" >
                                     <option value="Visita">En espera de Visita</option>
                                     <option value="Realizada">Realizada</option>
                                     <option value="Cancelada">Cancelada</option>
                                 </select>
                             </div>

                         </div>
                         <div class="form-group col-md-6">
                             <label for="inputDireccion">Observaciones:</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-building"></i>
                                 </div>
                                 <input type="text" class="form-control" name="Observacion" id="Observacion" placeholder="Se pide agregar un nuevo servicio... se deriva a administración..." >
                             </div>

                         </div>
                     </div>

                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                         <button type="submit" class="btn btn-primary">Agregar</button>
                     </div>
                 </form>


             </div>

         </div>
     </div>
 </div>