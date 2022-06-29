 <div class="modal fade" id="update_user_modal<?php echo $filas['Rut']; ?>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white; position:absolute; right: 40%;" id="exampleModalLabel">Ficha Instalaciones</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form method="POST" action="../../CRUD/UPDATE_FichaInstalaciones.php">
                     <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                         Datos del Cliente:</h4>
                         <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputNombreCliente">Cliente:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <select class="form-control" name="cliente" id="cliente">
                                    <option value="0">Seleccione a un Cliente</option>
                                    <?php
                                    $sql = ("SELECT * FROM cliente");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                      echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                  </select>
                                </div>

                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputNombreCliente">Encargado para la Instalación:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <select class="form-control" name="encargado" id="encargado">
                                    <option value="0">Seleccione a un Encargado</option>
                                  </select>
                                </div>

                              </div>
                            </div>

                     <br>

                     <h4 style=" font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                         Datos de las Instalación(es):</h4>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputRut">Nombre de la Instalación:</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fab fa-fort-awesome"></i>
                                 </div>
                                 <input type="text" class="form-control" id="NomIns" name="NomIns" value="<?php echo $filas['nombre'] ?>" placeholder="Nombre de la Instalación...">
                             </div>
                         </div>

                         <div class="form-group col-md-6">
                             <label for="inputTlf">Tipo de Instalación:</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-university"></i>
                                 </div>
                                 <select class="form-control" id="TipIns" name="TipIns" value="<?php echo $filas['TipoInstalacion'] ?>">
                                     <option value=" 0">Selecione un Tipo de Instalación</option>
                                     <?php
                                        $sql = ("SELECT * FROM tipoinstalacion");
                                        $query = $conn->query($sql);
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_tipoIns'] . '">' . $valores['Tipo'] . '</option>';
                                            //por defecto se creará como libre
                                        }
                                        ?>
                                 </select>
                             </div>
                         </div>

                     </div>

                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <label for="inputActividad">Dirección de la Instalación:</label>
                             <div class="input-group-prepend">
                                 <div class="input-group-text"><i class="fas fa-map-pin"></i>
                                 </div>
                                 <input type="text" class="form-control" name="AddressIns" id="AddressIns" value="<?php echo $filas['direccion'] ?>" placeholder="Edificio el bosque...">
                             </div>

                         </div>

                     </div>
                     <br>

             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                 <button type="submit" class="btn btn-primary">Agregar</button>
             </div>
             </form>

         </div>

     </div>
 </div>