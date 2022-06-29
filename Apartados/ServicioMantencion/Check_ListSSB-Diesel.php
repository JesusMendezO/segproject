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
                            <h1 class="m-0">Servicios de Mantención: Check List - SSB Diesel</h1>
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
                        <div class="card-body">
                        <form method="POST" action="../../PhP/Insertar_CheckCaCC.php">
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
                                    <label for="inputNombreCliente">Nombre Del Técnico:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-user"></i>
                                        </div>
                                        <select class="form-control" name="Cuadrilla">

                                        </select>
                                    </div>

                                </div>


                            </div>



                            <h4 style="font-size:20px;font-weight:bold;margin:auto;margin-bottom:4px;border-bottom-style: solid;border-bottom-color: #1eff56;">
                                Extinción de Incendio</h4>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Bomba Principal</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Marca:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="marca[]" id="marca[]" placeholder="Ingrese la marca del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Serial:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Serial[]" id="Serial[]">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputPlazoPago">Tipo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <select class="form-control" name="EEquipo[]">
                                            <option value="Horizontal">
                                                <p>Horizontal</p>
                                            </option>
                                            <option value="Vertical">
                                                <p>Vertical</p>
                                            </option>

                                        </select>
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Flujo Nominal (gpm):</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="FlujoNominal[]" id="FlujoNominal[]">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Supervisiones de Fallas:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-toolbox"></i>
                                        </div>
                                        <input type="text" class="form-control" name="SuperFallas[]" id="SuperFallas[]" placeholder="Ingrese la descripción de lo encontrado.">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Presión Nominal (psi):</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i>
                                        </div>
                                        <input type="number" class="form-control" name="PresionNominal[]" id="PresionNominal[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Voltaje Alterno:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i>
                                        </div>
                                        <input type="text" class="form-control" name="VoltajeAlterno[]" id="VoltajeAlterno[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Controlador</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Marca:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="marca[]" id="marca[]" placeholder="Ingrese la marca del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">

                                    <label for="inputDireccionPago">Serie N°:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Serial[]" id="Serial[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">

                                    <label for="inputDireccionPago">Voltaje de Fases:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i>
                                        </div>
                                        <input type="text" class="form-control" name="VoltajeFases[]" id="VoltajeFases[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">

                                    <label for="inputDireccionPago">Cargador 1:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Cargador1[]" id="Cargador1[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">




                                    <label for="inputDireccionPago">Cargador 2:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Cargador2" id="Cargador2">
                                    </div>

                                </div>


                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Motor BP</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Marca:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="marca[]" id="marca[]" placeholder="Ingrese la marca del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">

                                    <label for="inputDireccionPago">Serial:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Serial[]" id="Serial[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-4">

                                    <label for="inputDireccionPago">Velocidad:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-calculator"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Velocidad" id="Velocidad">
                                    </div>

                                </div>

                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Bomba Jockey</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Marca:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="marca[]" id="marca[]" placeholder="Ingrese la marca del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Presión Nominal (psi):</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-search"></i>
                                        </div>
                                        <input type="number" class="form-control" name="PresionNominal[]" id="PresionNominal[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Supervisiones de Fallas:</label>
                                    <div class="input-group-prepend">

                                        <input type="text" class="form-control" name="supervision" id="supervision">
                                    </div>

                                </div>

                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Controlador BJ</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Marca:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="marca[]" id="marca[]" placeholder="Ingrese la marca del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Voltaje - Fases:</label>
                                    <div class="input-group-prepend">

                                        <input type="text" class="form-control" name="VoltFa" id="VoltFa">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Voltaje Alterno:</label>
                                    <div class="input-group-prepend">

                                        <input type="number" class="form-control" name="VoltajeAlterno" id="VoltajeAlterno">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Velocidad(rpm):</label>
                                    <div class="input-group-prepend">

                                        <input type="number" class="form-control" name="Velocidad[]" id="Velocidad[]">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Reapriete de Terminales:</label>
                                    <div class="input-group-prepend">

                                        <input type="text" class="form-control" name="Reapriete" id="Reapriete">
                                    </div>

                                </div>
                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Motor BJ</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Modelo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="modelo[]" id="modelo[]" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Numero de Serie:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-sort-numeric-down"></i>
                                        </div>
                                        <input type="text" class="form-control" name="NserieBJ" id="NserieBJ" placeholder="54562-J">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Velocidad(rpm):</label>
                                    <div class="input-group-prepend">

                                        <input type="number" class="form-control" name="Velocidad[]" id="Velocidad[]">
                                    </div>

                                </div>

                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Estanque</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Placa Identificación:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-building"></i>
                                        </div>
                                        <input type="text" class="form-control" name="placaide" id="placaide" placeholder="Ingrese el modelo del producto">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Estado:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-boxes"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese el estado del Estanque">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Capacidad:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-clone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="Estado" id="Estado" placeholder="Ingrese la capcidad Estanque">
                                    </div>

                                </div>

                                <div class="form-group col-md-12">
                                    <h4 style="font-size:14px;font-weight:bold;margin:auto;">
                                        Interacción con Otros Sistemas</h4>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Detección de Incendio:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-fire-extinguisher"></i>
                                        </div>
                                        <input type="text" class="form-control" name="DIncendio" id="DIncendio">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Otro:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-boxes"></i>
                                        </div>
                                        <input type="text" class="form-control" name="DIncendio[]" id="DIncendio[]">
                                    </div>

                                </div>

                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Módulos Monitoreo:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-clone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="MMonitoreo" id="MMonitoreo">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Módulos Rele:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-clone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="MRele" id="MRele">
                                    </div>

                                </div>
                                <div class="form-group col-md-6">

                                    <label for="inputDireccionPago">Módulos de Control:</label>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-clone"></i>
                                        </div>
                                        <input type="text" class="form-control" name="MControl" id="MControl">
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