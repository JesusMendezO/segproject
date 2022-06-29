<div class="modal fade" id="lista<?php echo $filas['ID_ListaPrecio']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../PhP/INSERTAR_listaprecio.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de la lista</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['ID_ListaPrecio'];
                        $sql = ("SELECT * FROM listaprecios where ID_ListaPrecio='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group col-md-6">
                            <label for="inputFecha">Fecha de la compra:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="date" class="form-control" name="fecha" value="<?php echo $var['Fecha']; ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPrecioNeto">Precio Neto:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-address-card"></i>
                                </div>
                                <input type="text" class="form-control" name="Precio_neto" placeholder="20000" value="<?php echo $var['Precio_neto']; ?>">
                            </div>

                        </div>

                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputTlf">Afecto/Exento:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mobile"></i>
                                </div>
                                <select class="form-control" name="iva">
                                    <?php
                                    $sql = ("SELECT * FROM afectoexento");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_afectoExento'] == $var['iva'])
                                            echo '<option selected value="' . $valores['id_afectoExento'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['id_afectoExento'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputActividad">Precio Final:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-briefcase"></i>
                                </div>
                                <input type="number" class="form-control" name="final" id="final" value="<?php echo $var['PrecioFinal']; ?>">
                            </div>

                        </div>
                    </div>
                    <div class=" form-row">

                        <div class="form-group col-md-6">
                            <label for="inputPais">Margen:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <input type="number" class="form-control" name="margen" placeholder="5,10,15" value="<?php echo $var['Margen']; ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputproveedor">Seleccione el proveedor:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-mobile"></i>
                                </div>
                                <select class="form-control" name="proveedor">
                                    <?php
                                    $sql = ("SELECT * FROM proveedor");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['Rut'] == $var['rut_proveedor'])
                                            echo '<option selected value="' . $valores['Rut'] . '">' . $valores['Nombre_Empresa'] . '</option>';
                                        echo '<option value="' . $valores['Rut'] . '">' . $valores['Nombre_Empresa'] . '</option>';
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