<div class="modal fade" id="proveedor<?php echo $filas['Rut']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/Update_Proveedor.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos del Proveedor</h4>
                    <?php
                    $var = $filas['Rut'];
                    $sql = ("SELECT * FROM proveedor where Rut='$var'");
                    $query = $conn->query($sql);
                    $var = mysqli_fetch_array($query);
                    ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreCliente">Nombre de la empresa</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="nameProveedor" value="<?php echo $var['Nombre_Empresa']; ?>" placeholder="Ingrese el nombre del proveedor/empresa">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRut">Rut</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-address-card"></i>
                                </div>
                                <input type="text" class="form-control" name="rutProveedor" value="<?php echo $var['Rut']; ?>" placeholder="11111111-1">
                            </div>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputTlf">Teléfono:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mobile"></i>
                                </div>
                                <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $var['telefono']; ?>" placeholder="911111111">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputActividad">Actividad</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                </div>
                                <input type="text" class="form-control" name="Actividad" id="Actividad" value="<?php echo $var['Actividad']; ?>" placeholder="Ingrese su actividad">
                            </div>

                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputPais">País</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="pais">
                                    <?php
                                    $sql = ("SELECT * FROM pais");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id-pais'] == $var['Pais'])
                                            echo '<option selected value="' . $valores['id-pais'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['id-pais'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Región</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="region" id="region">
                                    <?php
                                    $sql = ("SELECT * FROM region");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['Id_Region'] == $var['Region'])
                                            echo '<option selected value="' . $valores['Id_Region'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['Id_Region'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputCiudad">Ciudad</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-house-user"></i>
                                </div>
                                <select class="form-control" name="ciudad" id="ciudad">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM ciudad");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_ciudad'] == $var['Ciudad'])
                                            echo '<option selected value="' . $valores['id_ciudad'] . '">' . $valores['Nombre_ciudad'] . '</option>';
                                        echo '<option value="' . $valores['id_ciudad'] . '">' . $valores['Nombre_ciudad'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDireccion">Dirección</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $var['Direccion']; ?>" placeholder="Ingrese la dirección">
                            </div>

                        </div>
                    </div>

                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                        Datos de Crédito y cobranza</h4>

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputPlazoPago">PlazodePago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="PPago" id="PPago" value="<?php echo $var['Plazopago']; ?>" placeholder="Ingrese el plazo de pago en días">
                            </div>

                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputEmail5">Correo Pago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="CorreoPago" id="CorreoPago" value="<?php echo $var['correo']; ?>" placeholder="contacto@dominio.com">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="InpuntRepre">Representante</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreRepresentante" id="NombreRepresentante" value="<?php echo $var['Representante']; ?>" placeholder="ingrese nombre de Representante">
                            </div>

                        </div>
                    </div>


                    <div class="form-row">

                        <div class="form-group col-md-4">

                            <label for="inputDireccionPago">Número de cuenta:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="text" class="form-control" name="nrocuenta" id="DirecPago" value="<?php echo $var['NumeroCuentaProveedor']; ?>" placeholder="Ingrese el numero de cuenta">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputLineaCredito">Línea de crédito</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-wallet"></i>
                                </div>
                                <input type="text" class="form-control" name="LineCredit" id="LineCredit" value="<?php echo $var['LineaCredito']; ?>" placeholder="Ingrese Línea de pago">
                            </div>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="inputDireccionPago">Dirección Pago</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>

                                <select class="form-control" name="DirecPago" id="DirecPago">
                                    <?php
                                    $sql = ("SELECT * FROM banco");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_banco'] == $var['Banco_Proveedor'])
                                            echo '<option selected value="' . $valores['id_banco'] . '">' . $valores['Nombre_Banco'] . '</option>';
                                        echo '<option value="' . $valores['id_banco'] . '">' . $valores['Nombre_Banco'] . '</option>';
                                    }
                                    ?>

                                </select>
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