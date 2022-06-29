<div class="modal fade" id="Especialidad<?php echo $filas['id_Especialidad']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Agregar Especialidad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="../../CRUD/UPDATE_especialidad.php">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Ingrese la especialidad</h4>
                    <div class="form-row">
                        <?php
                        $var = $filas['id_Especialidad'];
                        $sql = ("SELECT * FROM especialidad where id_Especialidad='$var'");
                        $query = $conn->query($sql);
                        $var = mysqli_fetch_array($query);
                        ?>
                        <div class="form-group col-md-6">
                            <input hidden value="<?php echo $var['id_Especialidad']; ?>" name="id">
                            <label for="inputNombreEmpleado">Nombre:</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $filas['Nombre'] ?>" placeholder="MANTENCIÓN SISTEMA DE CCTV...">
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