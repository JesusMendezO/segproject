<div class="modal fade" id="crud<?php echo $filas['id_cargo']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#3f668d">
                <h5 class="modal-title" style="color:white" id="exampleModalLabel">Ficha Cargo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="POST" action="./CRUD/UPDATE_cargo.php" id="cargo">
                    <input hidden type="text" value="<?php echo $filas['id_cargo']; ?>" name="id">
                    <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                        Datos del Cargo</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpleado">Nombre del Cargo</label>
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i>
                                </div>
                                <input type="text" class="form-control" name="NombreCargo" id="NombreCargo" placeholder="Ingrese nombre del cargo" value="<?php echo $filas['Nombre_Cargo'] ?>">
                            </div>

                        </div>


                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" onClick='return enviarFormulario();'>Agregar</button>
            </div>
            </form>


        </div>

    </div>
</div>