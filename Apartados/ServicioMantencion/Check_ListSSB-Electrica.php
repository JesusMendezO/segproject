<?php
include('../../Conexion/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sección Ficha Proveedor</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../recursos/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../recursos/dist/css/adminlte.min.css">
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!--DataTables-->
    <link rel="stylesheet" href="../../recursos/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../recursos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <div id="navBar">
          <?php include '../1.ContenidoEstatico/NavBar.php' ?>
        </div>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <div id="sliceBar">
          <?php include '../1.ContenidoEstatico/Slicebar.php'  ?>
        </div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0">Servicios de Mantención: Check List - SSB Electronica</h1>
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="botones" style="margin-bottom:1%">
                <!-- Crear modal a todos los botones -->


            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="modal-body">

                                    <form method="POST" action="#">
                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #00c0ef;">
                                            Datos del Solicitante</h4>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputNombreCliente">Nombre del Cliente</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                    </div>
                                                    <select class="form-control" name="cliente">
                                                        <?php
                                                        $sql = ("SELECT * FROM cliente");
                                                        $query = $conn->query($sql);
                                                        while ($valores = mysqli_fetch_array($query)) {
                                                            echo '<option value="' . $valores['id-Rut'] . '">' . $valores['Nombre'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- mostrar en el select los contratos ligados al cliente -->
                                            <div class="form-group col-md-6">
                                                <label for="inputNombreCliente">Contrato:</label>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-user"></i>
                                                    </div>
                                                    <select class="form-control" name="Contrato">

                                                    </select>
                                                </div>

                                            </div>

                                        </div>



                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                                            Sala de Bombas de Incendio</h4>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <h4 style="font-size:14px;font-weight:bold;margin:auto;border-bottom-style: solid;border-bottom-color: #F75836;">
                                                    Bomba Principial</h4>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="marca" id="marca">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="modelo" id="modelo">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-4">

                                                <label for="inputDireccionPago">Motor Tipo:</label>
                                                <div class="input-group-prepend">

                                                    <select class="form-control" name="MTipo">
                                                        <option value="Diesel">
                                                            <p>Diesel</p>
                                                        </option>
                                                        <option value="Electrico">
                                                            <p>Eléctrico</p>
                                                        </option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca/Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="marca" id="marca">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-12">
                                                <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                                    Tablero Control</h4>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="marcatablerocontrol" id="marcatablero">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="modelotablerocontrol" id="modelotablero">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-12">
                                                <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                                    Tablero Transferencia</h4>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="marcatablerotransferencia" id="marcatablerotransferencia">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="modelotablerotransferencia" id="modelotablerotransferencia">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Nominal (gpm):</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="VoltajeNominal" id="VoltajeNominal">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Supervisiones de Fallas:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="SFallas" id="SFallas">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Presión Nominal (psi):</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="PNominal" id="PNominal">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Alterno:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeAlterno" id="VoltajeAlterno">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Presión Partida (psi):</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeAlterno" id="VoltajeAlterno">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Continuo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeContinuo" id="VoltajeContinuo">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Carga Batería:</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="CargaBateria" id="CargaBateria">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Líneas:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="linea" id="linea">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Corriente de Batería:</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="CorrienteBa" id="CorrienteBa">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Tierra:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="Tierra" id="Tierra">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje - Fases:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltFa" id="VoltFa">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Reaprete de Terminales:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="ReaTerminales" id="ReaTerminales">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <h4 style="font-size:14px;font-weight:bold;margin:auto;border-bottom-style: solid;border-bottom-color: #F78036;">
                                                    Bomba Jockey</h4>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="marcaJockey" id="marcaJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="modeloJockey" id="modeloJockey">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-12">
                                                <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                                    Tablero Control</h4>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Marca:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="MarcaControl2" id="MarcaControl2">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputDireccionPago">Modelo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="modeloControl2" id="modeloControl2">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Nominal (gpm):</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="VoltajeNominalJockey" id="VoltajeNominalJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Supervisiones de Fallas:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="SFallasJockey" id="SFallasJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Presión Partida (psi):</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="PPartidaJockey" id="PPartidaJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Alterno:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeAlternoJockey" id="VoltajeAlternoJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Presión Partida (psi):</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeAlternoJockey" id="VoltajeAlternoJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Alterno:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltajeAlternoJockey" id="VoltajeAlternoJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Presión Apagado (psi):</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="PApagadoJockey" id="PApagadoJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje Continuo:</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="VoltajeCJockey" id="VoltajeCJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Flujo Nominal (gpm):</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="VoltajeCJockey" id="VoltajeCJockey">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Supervisiones de Fallas:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="SFallasJockey2" id="SFallasJockey2">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje - Fases:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VFJockey" id="VFJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Líneas:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="linea" id="linea">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Carga de Batería:</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="CargaBJockey" id="CorrienteBJockey">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Tierra:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="TierraJockey" id="TierraJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Corriente de Batería:</label>
                                                <div class="input-group-prepend">

                                                    <input type="number" class="form-control" name="CorrienteBaJockey" id="CorrienteBaJockey">
                                                </div>

                                            </div>

                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Voltaje - Fases:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="VoltFaJockey" id="VoltFaJockey">
                                                </div>

                                            </div>
                                            <div class="form-group col-md-6">

                                                <label for="inputDireccionPago">Reaprete de Terminales:</label>
                                                <div class="input-group-prepend">

                                                    <input type="text" class="form-control" name="ReaTerminalesJockey" id="ReaTerminalesJockey">
                                                </div>

                                            </div>

                                        </div>
                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                                            Equipos de Activación</h4>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Área</th>
                                                        <th>Equipos de Anunciación</th>
                                                        <th>Cantidad</th>
                                                        <th>Estado del Equipo</th>
                                                        <th>Requerimiento</th>

                                                        <th>Observación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr>
                                                        <td>
                                                            <!-- Aquí se detallan el área del producto-->
                                                        </td>
                                                        <td> <select class="form-control" name="EActivacion[]">
                                                                <?php
                                                                $sql = ("SELECT * FROM equiposactivacionch6");
                                                                $query = $conn->query($sql);
                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                    echo '<option value="' . $valores['id'] . '">' . $valores['Nombre'] . '</option>';
                                                                }
                                                                ?>
                                                            </select></td>
                                                        <td>
                                                            <!-- Aquí se detallan los equipos del contrato-->
                                                        </td>
                                                        <td>
                                                            <select class="form-control" name="EEquipo[]">
                                                                <option value="0">
                                                                    <p>Seleccione el Estado...</p>
                                                                </option>
                                                                <option value="Normal">
                                                                    <p>Normal</p>
                                                                </option>
                                                                <option value="Falla">
                                                                    <p>Falla</p>
                                                                </option>
                                                                <option value="Propenso">
                                                                    <p>Propenso a Falla</p>
                                                                </option>
                                                            </select>
                                                        </td>

                                                        <td>

                                                            <select class="form-control" name="EEquipo[]">
                                                                <option value="0">
                                                                    <p>Seleccione el Producto...</p>
                                                                </option>

                                                            </select>

                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="Observacion[]" id="Observacion[]" placeholder="Ingrese algún comentario sobre la actividad">
                                                        </td>
                                                        </td>



                                                    </tr>

                                                </tbody>
                                            </table>


                                        </div>

                                        <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                                            Sistema de Red Húmeda</h4>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Área</th>
                                                        <th>Equipos de Activación</th>
                                                        <th>Cantidad</th>
                                                        <th>Estado del Equipo</th>
                                                        <th>Observación</th>
                                                        <th>Requerimiento</th>
                                                        <th>Cantidad</th>
                                                        <th>Observación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr>
                                                        <td>
                                                            <!-- Aquí se detallan el área del producto-->
                                                        </td>
                                                        <td> <select class="form-control" name="EActivacion[]">
                                                                <?php
                                                                $sql = ("SELECT * FROM equiposch6");
                                                                $query = $conn->query($sql);
                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                    echo '<option value="' . $valores['id'] . '">' . $valores['Nombre'] . '</option>';
                                                                }
                                                                ?>
                                                            </select></td>
                                                        <td>
                                                            <!-- Aquí se detallan los equipos del contrato-->
                                                        </td>
                                                        <td>
                                                            <select class="form-control" name="EEquipo[]">
                                                                <option value="0">
                                                                    <p>Seleccione el Estado...</p>
                                                                </option>
                                                                <option value="Normal">
                                                                    <p>Normal</p>
                                                                </option>
                                                                <option value="Falla">
                                                                    <p>Falla</p>
                                                                </option>
                                                                <option value="Propenso">
                                                                    <p>Propenso a Falla</p>
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td>

                                                            <input type="text" class="form-control" name="Observacion[]" id="Observacion[]" placeholder="Ingrese algún comentario sobre la actividad">

                                                        </td>
                                                        <td><select class="form-control" name="EEquipo[]">
                                                                <option value="0">
                                                                    <p>Seleccione el Producto...</p>
                                                                </option>

                                                            </select></td>
                                                        </td>
                                                        <td><input type="number" style="width:60%;"></td>

                                                        <td><input type="text"></td>



                                                    </tr>

                                                </tbody>
                                            </table>


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
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Propiedad de Mline 2021
                <a href="https://mlineseg.wixsite.com/website">Mline</a>.</strong>
            Todos los derechos reservados
            <div class="float-right d-none d-sm-inline-block">
                <b>Versión</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <script src="../../recursos/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../recursos/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="../../recursos/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="../../recursos/plugins/chart.js/Chart.min.js"></script>
    <script src="../../recursos/js/jquery-latest.min.js"></script>

    <!-- DataTables  & Plugins -->

    <script src="../../recursos/plugins/jszip/jszip.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../recursos/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../recursos/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../recursos/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../recursos/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>

</html>