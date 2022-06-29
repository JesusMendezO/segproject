<div class="modal fade" id="updateMaterial<?php echo $filas['CodigoMP']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/UPDATE_producto.php" enctype="multipart/form-data">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos de Material o producto</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['CodigoMP'];
                        $sql = ("SELECT * FROM materialoproducto where CodigoMP='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group col-md-4">
                            <label for="inputNombreEmpleado">Código:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="codigo" id="codigo" value="<?php echo $var['CodigoMP'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Nombre:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Cámara video 4k..." value="<?php echo $var['Nombre'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputRegion">Tipo de modelo</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="modelo">
                                    <?php
                                    $sql = ("SELECT * FROM tipomodelo");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_TipoModelo'] == $var['ID_TipoModelo'])
                                            echo '<option selected value="' . $valores['id_TipoModelo'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['id_TipoModelo'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>

                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNombreEmpleado">Descripción:</label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                    </div>
                                    <input type="text" class="form-control" name="Descripcion" id="Descripcion" value="<?php echo $var['Descripcion'] ?>" placeholder="Agregue una descripción del producto">
                                </div>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputRegion">Rubro asociado: </label>
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-building"></i>
                                    </div>
                                    <input type="text" class="form-control" name="rubro" value="<?php echo $var['Rubro_Asociado'] ?>" placeholder="Agregue el rubro del producto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCiudad">Categoria</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-house-user"></i>
                                </div>
                                <select class="form-control" name="categoria">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM categoria");
                                    $query = $conn->query($sql);
                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_Categoria'] == $filas['Categoria_id'])
                                            echo '<option selected value="' . $valores['id_Categoria'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['id_Categoria'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>

                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCiudad">SubCategoria</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-house-user"></i>
                                </div>
                                <select class="form-control" name="subcategoria">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM subcategoria");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_subcategoria'] == $filas['SubCategoria_id'])
                                            echo '<option selected value="' . $valores['id_subcategoria'] . '">' . $valores['NombreSubcategoria'] . '</option>';
                                        echo '<option selected value="' . $valores['id_subcategoria'] . '">' . $valores['NombreSubcategoria'] . '</option>';
                                    }
                                    ?>
                                </select>

                            </div>

                        </div>




                    </div>
                    <!--  fin form row -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Unidad de medida:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="unidadmedida">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM unidadmedida");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['ID_UnidadMedida'] ==  $filas['Unidad_Medida_id'])
                                            echo '<option selected value="' . $valores['ID_UnidadMedida'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['ID_UnidadMedida'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Afecto/exento: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="afectoexento">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM afectoexento");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['id_afectoExento'] == $filas['Afectoexento'])
                                            echo '<option value="' . $valores['id_afectoExento'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="ListaPrecio">Seleccione el proveedor:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <select class="form-control" name="listaprecios">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM listaprecios");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['ID_ListaPrecio'] == $filas['id_listaPrecio'])
                                            echo '<option selected value="' . $valores['ID_ListaPrecio'] . '">' . $valores['rut_proveedor'] . '</option>';
                                        echo '<option  value="' . $valores['ID_ListaPrecio'] . '">' . $valores['rut_proveedor'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputMoneda">Tipo de moneda: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="listamonedas">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM moneda");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['ID_moneda'] == $filas['Tipo_Moneda'])
                                            echo '<option selected value="' . $valores['ID_moneda'] . '">' . $valores['Nombre'] . '</option>';
                                        echo '<option value="' . $valores['ID_moneda'] . '">' . $valores['Nombre'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>


                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Cantidad:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="number" class="form-control" name="cantidad" id="cantidad" value="<?php echo $var['Cantidad'] ?>">
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Bodega: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-building"></i>
                                </div>
                                <select class="form-control" name="bodega">
                                    <!-- php aquí -->
                                    <?php
                                    $sql = ("SELECT * FROM bodega");
                                    $query = $conn->query($sql);

                                    while ($valores = mysqli_fetch_array($query)) {
                                        if ($valores['Codigo_bodega'] == $filas['Id_Bodega'])
                                            echo '<option selected value="' . $valores['Codigo_bodega'] . '">' . $valores['Nombre_Bodega'] . '</option>';
                                        echo '<option value="' . $valores['Codigo_bodega'] . '">' . $valores['Nombre_Bodega'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- seguir -->
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputalert">Alerta Stock: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-images"></i>
                                </div>
                                <input type="number" class="form-control-file" name="stock" value="<?php echo $var['AlertaStock'] ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-6">

                            <label for="inputimg">Imagen: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-images"></i>
                                </div>
                                <input type="file" class="form-control-file" name="img">
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Stock Mínimo: </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-images"></i>
                                </div>
                                <input type="number" class="form-control-file" name="Stockminimo" value="<?php echo $var['StockMinimo'] ?>">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputRegion">Valor Unitario : </label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-images"></i>
                                </div>
                                <input type="number" class="form-control-file" name="valorUni" value="<?php echo $var['ValorUnitario'] ?>">
                            </div>
                        </div>

                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" name="guardar" class="btn btn-primary">Agregar</button>
            </div>
            </form>


        </div>

    </div>
</div>