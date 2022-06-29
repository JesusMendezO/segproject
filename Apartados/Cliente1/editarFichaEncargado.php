 <div class="modal fade" id="update_user_modal<?php echo $filas['Rut']; ?>" tabindex=" -1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header" style="background-color:#3f668d">
              <h5 class="modal-title" style="color:white; position:absolute; right: 40%;" id="exampleModalLabel">Ficha Encargado(a)</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <form method="POST" action="#">
                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                              Datos del Cliente:</h4>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputNombreCliente">Cliente:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <select class="form-control" name="cliente" id="cliente">
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
                            </div>
                            <br>

                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                              Datos del(los) Encargado(s):</h4>

                            <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputNombreEmpleado">RUT:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i>
                                  </div>
                                  <input type="text" class="form-control" name="RUTEncarg" id="RUTEncarg" value="" placeholder="98.123.567-K">
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputNombreEmpleado">Nombre del Encargado(a) de la Instalación:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-user"></i>
                                  </div>
                                  <input type="text" class="form-control" id="Nom_Encarg" name="Nom_Encarg[]" value="" style="width: 85%;" placeholder="Nombre y Apellido...">
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputEmail">Correo Electrónico del Encargado(a) de la Instalación:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-envelope"></i>
                                  </div>
                                  <input type="email" class="form-control" name="EmailEncarg" id="EmailEncarg" value="" placeholder="contacto@dominio.com">
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputEmail">Numero de Teléfono del Encargado(a) de la Instalación:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-mobile-alt"></i>
                                  </div>
                                  <input type="number" class="form-control" name="TlfEncarg" id="TlfEncarg" value="" placeholder="1234-2355-421">
                                </div>
                              </div>

                              <div class="form-group col-md-6">
                                <label for="inputEmail">Estado del Encargado:</label>
                                <div class="input-group-prepend">
                                  <div class="input-group-text"><i class="fas fa-info"></i>
                                  </div>
                                  <select class="form-control" name="estado_encarg" id="estado_encarg">
                                    <option value="0">Seleccione un Estado</option>
                                    <option value="1">Inactivo</option>
                                    <option value="2">Activo</option>
                                  </select>
                                </div>
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